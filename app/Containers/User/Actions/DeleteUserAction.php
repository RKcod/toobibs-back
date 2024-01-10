<?php

namespace App\Containers\User\Actions;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

/**
 * Class DeleteUserAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class DeleteUserAction extends Action
{

    /**
     * @param \App\Ship\Transporters\DataTransporter $data
     */
    public function run(DataTransporter $data): void
    {
      //echo $data->id;
        $user = Apiato::call('User@FindUserByIdTask', [$data->id]);// : Apiato::call('Authentication@GetAuthenticatedUserTask');

        //if($user->user_type == "DOCTOR"){
          //Apiato::call('Prices@DeletePricesByDoctorTask', [$user->id]);
        //}

        //Apiato::call('User@DeleteUserTask', [$user]);
        //$user = Apiato::call('User@FindUserByIdTask', [$data->id]);
        $user->forceDelete();
    }
}
