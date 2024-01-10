<?php

namespace App\Containers\PrescriptionMedecine\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreatePrescriptionMedecineAction extends Action
{
    public function run(Request $request)
    {
        $data = [
            // add your request data here
          'prescription_id' => $request->prescription_id,
          'medicine_id' => $request->medicine_id,
          'duration' => $request->duration,
          'date_first_taken' => $request->date_first_taken,
          'quantity' => $request->quantity,
          'frequency' => $request->frequency,
          'time_of_intake' => $request->time_of_intake,
          'renewal_date' => $request->renewal_date,
          'other_precisions' => $request->other_precisions,
        ];

        $prescriptionmedecine = Apiato::call('PrescriptionMedecine@CreatePrescriptionMedecineTask', [$data]);

        return $prescriptionmedecine;
    }
}
