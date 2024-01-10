<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Events\UserRegisteredEvent;
use App\Containers\User\Mails\UserRegisteredMail;
use App\Containers\User\Models\User;
use App\Containers\User\Notifications\UserRegisteredNotification;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

/**
 * Class RegisterUserAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class RegisterUserAction extends Action
{

    /**
     * @param \App\Ship\Transporters\DataTransporter $data
     *
     * @return  \App\Containers\User\Models\User
     */
    public function run(DataTransporter $data): User
    {



      if($data->user_type == "DOCTOR"){

        // create user record in the database and return it.
        $user = Apiato::call('User@CreateUserByCredentialsTask', [
          $isClient = true,
          $data->email,
          $data->password,
          $data->first_name,
          $data->last_name,
          $data->gender,
          $data->birth,

          $data->address,
          $data->phone,
          $data->speciality,
          $data->doctor_serial_number,
          $data->user_type,
          'uploads/profile/default.png',//$data->profile_picture,
          $data->center_id,
          $data->do_teleconsult,
          $data->phone_login

        ]);
      }
      else {

        // create user record in the database and return it.
        $user = Apiato::call('User@RegisterUserTask', [
          $isClient = true,
          $data->email,
          $data->password,
          $data->first_name,
          $data->last_name,
          $data->gender,
          $data->birth,

          $data->address,
          $data->phone,
          $data->user_type,
          'uploads/profile/default.png',//$data->profile_picture,
          $data->phone_login,

        ]);
      }


        if($data->user_type == "DOCTOR"){
          $p_data = [
            'price_cabinet_consultation' => "0",
            'price_teleconsultation' => "0",
            'price_house_consultation' => "0",
            'currency' => "XOF",
            'doctor_id' => $user->id,
            'fees' => "0",
            'fees_type' => "FIXED",
            'profile_type' => "DOCTOR",
          ];


          $prices = Apiato::call('Prices@CreatePricesTask', [$p_data]);
          //print_r($prices);
        }

        if($data->email != null){
         // Mail::send(new UserRegisteredMail($user));

          Notification::send($user, new UserRegisteredNotification($user));

        }

      App::make(Dispatcher::class)->dispatch(New UserRegisteredEvent($user));

        return $user;
    }
}
