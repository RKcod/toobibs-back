<?php

namespace App\Containers\Sms\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteSmsAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Sms@DeleteSmsTask', [$request->id]);
    }
}
