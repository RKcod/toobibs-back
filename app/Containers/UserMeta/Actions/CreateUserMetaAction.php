<?php

namespace App\Containers\UserMeta\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateUserMetaAction extends Action
{
    public function run(Request $request)
    {
        $data = [
          'type' => $request->type,
          'start_year' => $request->start_year,
          'end_year' => $request->end_year,
          'title' => $request->title,
          'at' => $request->at,
          'description' => $request->description,
          'doctor_id' => $request->doctor_id,
        ];

        $usermeta = Apiato::call('UserMeta@CreateUserMetaTask', [$data]);

        return $usermeta;
    }
}
