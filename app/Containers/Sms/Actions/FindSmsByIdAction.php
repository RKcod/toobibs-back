<?php

namespace App\Containers\Sms\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindSmsByIdAction extends Action
{
    public function run(Request $request)
    {
        $sms = Apiato::call('Sms@FindSmsByIdTask', [$request->id]);

        return $sms;
    }
}
