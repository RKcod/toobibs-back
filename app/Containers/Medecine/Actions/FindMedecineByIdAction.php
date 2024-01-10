<?php

namespace App\Containers\Medecine\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindMedecineByIdAction extends Action
{
    public function run(Request $request)
    {
        $medecine = Apiato::call('Medecine@FindMedecineByIdTask', [$request->id]);

        return $medecine;
    }
}
