<?php

namespace App\Containers\Call\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllCallsAction extends Action
{
    public function run(Request $request)
    {
        $calls = Apiato::call('Call@GetAllCallsTask', [$request->user_field,$request->user_value,$request->has_missed]);

        return $calls;
    }
}
