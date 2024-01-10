<?php

namespace App\Containers\Medecine\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateMedecineAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $medecine = Apiato::call('Medecine@UpdateMedecineTask', [$request->id, $data]);

        return $medecine;
    }
}
