<?php

namespace App\Containers\PrescriptionMedecine\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdatePrescriptionMedecineAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $prescriptionmedecine = Apiato::call('PrescriptionMedecine@UpdatePrescriptionMedecineTask', [$request->id, $data]);

        return $prescriptionmedecine;
    }
}
