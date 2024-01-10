<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAddressesAction extends Action
{

  public  function  run(){
    $address = Apiato::call('User@GetAllAddressTask', [], ['addRequestCriteria']);

    return $address;
  }

}
