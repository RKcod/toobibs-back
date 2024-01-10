<?php

namespace App\Containers\Call\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCallByIdAction extends Action
{
    public function run(Request $request)
    {
        $call = Apiato::call('Call@FindCallByIdTask', [$request->id]);

        return $call;
    }
}
