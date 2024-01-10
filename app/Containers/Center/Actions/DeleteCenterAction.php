<?php

namespace App\Containers\Center\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteCenterAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Center@DeleteCenterTask', [$request->id]);
    }
}
