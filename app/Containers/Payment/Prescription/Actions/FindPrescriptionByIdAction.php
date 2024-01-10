<?php

namespace App\Containers\Prescription\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindPrescriptionByIdAction extends Action
{
    public function run(Request $request)
    {
        $prescription = Apiato::call('Prescription@FindPrescriptionByIdTask', [$request->id]);

        return $prescription;
    }
}
