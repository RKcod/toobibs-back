<?php

namespace App\Containers\CenterType\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateCenterTypeAction extends Action
{
    public function run(Request $request)
    {
        $data = [
            // add your request data here
          "name" => $request->name,
          "description" => $request->description,
        ];

        $centertype = Apiato::call('CenterType@CreateCenterTypeTask', [$data]);

        return $centertype;
    }
}
