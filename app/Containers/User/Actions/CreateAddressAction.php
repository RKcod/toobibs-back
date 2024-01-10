<?php

namespace App\Containers\User\Actions;

use App\Containers\User\Models\Address;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use Illuminate\Support\Facades\DB;
use App\Containers\User\UI\API\Requests\CreateAddressNewRequest;
use App\Ship\Transporters\DataTransporter;
class CreateAddressAction extends  Action
{

  /**
   * @param \App\Containers\User\UI\API\Requests\CreateAddressNewRequest $request
   */
  public function run(DataTransporter $request)
  {
    
      $address= $request->address;
      $doctor_id= $request->doctor_id;
 
    // $data = [
    //   // add your request data here
    //   'address' => $request->address,
    //   'doctor_id' => $request->doctor_id,
    // ];

    // //$address = Apiato::call('User@CreateAdressTask', [$data]);
    // $query =Address::updateOrCreate($data, $data);
    DB::insert('insert into address (address, doctor_id) values (?, ?)', [$address, $doctor_id]);
    return ;
  }
}
