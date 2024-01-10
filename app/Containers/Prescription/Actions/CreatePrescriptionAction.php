<?php

namespace App\Containers\Prescription\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreatePrescriptionAction extends Action
{
    public function run(Request $request)
    {
        $data = [
          'email'=> $request->email,
          'first_name'=> $request->first_name,
          'gender'=> $request->gender,
          'last_name'=> $request->last_name,
          'phone'=> $request->phone,
          'profile'=> $request->profile,
          'reason'=> $request->reason,
          'user_id'=> $request->user_id,
          'doctor_id'=> $request->doctor_id,
          'appointment_id'=> $request->appointment_id,

         // 'medicine_name'=> $request->medicine_name,
          //'typeMedecine'=> $request->typeMedecine,
          //'number'=> $request->number,
          //'unit'=> $request->unit,
          //'dosage'=> $request->dosage,
          //'frequency'=> $request->frequency,
          //'time_of_intake'=> $request->time_of_intake,
          //'first_intake_date'=> $request->first_intake_date,
          //'first_intake_date2'=> $request->first_intake_date2,
          //'other_precisions'=> $request->other_precisions
        ];

        $prescription = Apiato::call('Prescription@CreatePrescriptionTask', [$data]);

        return $prescription;
    }
}
