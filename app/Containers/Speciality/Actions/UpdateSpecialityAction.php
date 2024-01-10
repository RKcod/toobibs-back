<?php

namespace App\Containers\Speciality\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateSpecialityAction extends Action
{
  public function run(Request $request)
  {
    $data = [
      // add your request data here
      'name' => $request->name,
      'description' => $request->description,
    ];
    //$data = array_filter($data);

    $speciality = Apiato::call('Speciality@UpdateSpecialityTask', [$request->id, $data]);

    return $speciality;
  }
}
