<?php

namespace App\Containers\CenterType\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateCenterTypeAction extends Action
{
  public function run(Request $request)
  {
    $data = [
      // add your request data here
      "name" => $request->name,
      "description" => $request->description,
    ];
    // remove null values and their keys
    $data = array_filter($data);

    $centertype = Apiato::call('CenterType@UpdateCenterTypeTask', [$request->id, $data]);

    return $centertype;
  }
}
