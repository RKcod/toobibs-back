<?php

namespace App\Containers\Center\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateCenterAction extends Action
{
  public function run(Request $request)
  {
    $data = [
      // add your request data here
      'name' => $request->name,
      'address' => $request->address,
      'lat' => $request->lat,
      'lng' => $request->lng,
      'phone' => $request->phone,
      'email' => $request->email,
    ];
    // remove null values and their keys
    $data = array_filter($data);

    $center = Apiato::call('Center@UpdateCenterTask', [$request->id, $data]);

    return $center;
  }
}
