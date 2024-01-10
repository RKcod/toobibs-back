<?php

namespace App\Containers\Appointment\Actions;

use App\Containers\Appointment\Models\Appointment;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Illuminate\Support\Facades\DB;

class SearchAppointmentAction extends Action
{
  public function run(Request $request)
  {
    if ($request->field == 'null') {
      $appointments = DB::select("select doctor_id, sum(cost) as total from appointments where `date` >= '".$request->start."' and `date` <= '".$request->end."' GROUP BY doctor_id");
      $total = 0;
      $fees = 0;
      foreach ($appointments as $a) {
        //print_r($a);
        $total = $total + floatval($a->total);
        $prices = Apiato::call('Prices@GetPricesByDoctorTask', [$a->doctor_id])[0];
        //print_r($prices);
        $f = $prices->fees;
        if($prices->currency != "XOF"){
          $f = floatval($prices->fees)*655.95;
        }
        $fees = $fees + ($prices->fees_type == "FIXED" ? floatval($f) :floatval($a->total) * (floatval($f)/100));
      }

      $app = new Appointment();
      $app->cost = $fees;
      $app->address = DB::select("select count(id) as total from appointments where `date` >= '".$request->start."' and `date` <= '".$request->end."'")[0]->total;
      $app->type = DB::select("select count(id) as total from users where deleted_at is null and (user_type='DOCTOR' or user_type='PATIENT')")[0]->total;
      //$app->status = $fees;
      $app->currency = "XOF";
      return $app;
    } else {
      $appointments = Apiato::call('Appointment@SearchAppointmentTask', [$request->start, $request->end, $request->field, $request->value]);
      $total = 0;
      $fees = 0;
      foreach ($appointments as $a) {
        $total = $total + floatval($a->cost);
      }
      /*
      if($request->field == "doctor_id"){
        $prices = Apiato::call('Prices@GetPricesByDoctor', [$request->value]);
        $fee = floatval($prices->fees);
        $fees = $prices->fee_type == "FIXED" ? $fee : $total * ($fee/100);
      }
      */


      $app = new Appointment();
      $app->cost = $total;
      //$app->status = $fees;
      $app->currency = (count($appointments) > 0 ? $appointments[0]->currency : "XOF");
      return $app;
    }
  }
}
