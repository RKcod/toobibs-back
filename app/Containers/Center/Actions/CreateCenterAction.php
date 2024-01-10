<?php

namespace App\Containers\Center\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateCenterAction extends Action
{
    public function run(Request $request)
    {
        $data = [
            // add your request data here
          'name'=> $request->name,
          'address'=> $request->address,
          'lat'=> $request->lat,
          'lng'=> $request->lng,
          'phone'=> $request->phone,
          'email'=> $request->email,
          'center_type_id'=> $request->center_type_id,
        ];

        $center = Apiato::call('Center@CreateCenterTask', [$data]);

        return $center;
    }
}
