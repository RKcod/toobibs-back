<?php

namespace App\Containers\CenterType\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteCenterTypeAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('CenterType@DeleteCenterTypeTask', [$request->id]);
    }
}
