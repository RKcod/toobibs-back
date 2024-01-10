<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllAddressAction extends Action
{
    public function run(Request $req)
    {
        $address = Apiato::call('User@GetAllAddressTask', [], ['addRequestCriteria']);

        return $address;
    }
}
