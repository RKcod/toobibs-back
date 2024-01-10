<?php

namespace App\Containers\PrescriptionMedecine\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllPrescriptionMedecinesAction extends Action
{
    public function run(Request $request)
    {
        $prescriptionmedecines = Apiato::call('PrescriptionMedecine@GetAllPrescriptionMedecinesTask', [], ['addRequestCriteria']);

        return $prescriptionmedecines;
    }
}
