<?php

namespace App\Containers\Appointment\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\DB;

class GetPatientAction extends Action
{
    public function run(Request $request)
    {
        $patients = DB::table('appointments')
        ->select('*')
        ->where('doctor_id', '=', $request->doctorId)
        ->where('users_id', '<>', $request->doctorId)
        ->get();

       return $patients;
    }
}
