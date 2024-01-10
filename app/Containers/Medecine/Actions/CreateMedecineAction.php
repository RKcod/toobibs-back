<?php

namespace App\Containers\Medecine\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateMedecineAction extends Action
{
    public function run(Request $request)
    {
        $data = [
            // add your request data here
          'name' => $request->name,
          'type' => $request->type,
        ];

        $medecine = Apiato::call('Medecine@CreateMedecineTask', [$data]);

        return $medecine;
    }
}
