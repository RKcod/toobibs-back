<?php

namespace App\Containers\Call\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateCallAction extends Action
{
  public function run(Request $request)
  {
    $data = [
      // add your request data here
      'user_from_id' => $request->user_from_id,
      'user_to_id' => $request->user_to_id,
      'rdv_id' => $request->rdv_id,
      'duration' => $request->duration,
      'has_missed' => $request->has_missed,
    ];
    // remove null values and their keys
    $data = array_filter($data);

    $call = Apiato::call('Call@UpdateCallTask', [$request->id, $data]);

    return $call;
  }
}
