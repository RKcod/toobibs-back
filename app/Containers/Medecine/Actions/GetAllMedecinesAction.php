<?php

namespace App\Containers\Medecine\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllMedecinesAction extends Action
{
    public function run(Request $request)
    {
        $medecines = Apiato::call('Medecine@GetAllMedecinesTask', [], ['addRequestCriteria']);

        return $medecines;
    }
}
