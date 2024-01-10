<?php

namespace App\Containers\PrescriptionMedecine\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindPrescriptionMedecineByIdAction extends Action
{
    public function run(Request $request)
    {
        $prescriptionmedecine = Apiato::call('PrescriptionMedecine@FindPrescriptionMedecineByIdTask', [$request->id]);

        return $prescriptionmedecine;
    }
}
