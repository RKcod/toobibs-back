<?php

namespace App\Containers\Sms\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateSmsAction extends Action
{
    public function run(Request $request)
    {
        $data = [
            // add your request data here
          'message' => $request->message,
          'type' => $request->type,
          'title'=> $request->title,
          'doctor_id' => $request->doctor_id,
        ];

        $sms = Apiato::call('Sms@UpdateSmsTask', [$request->id, $data]);

        return $sms;
    }
}
