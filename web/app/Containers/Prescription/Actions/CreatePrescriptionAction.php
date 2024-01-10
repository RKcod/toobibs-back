<?php

namespace App\Containers\Prescription\Actions;

use App\Containers\Sms\Models\Sms;
use \App\Ship\Parents\Actions\Action;

use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\DB;

class CreatePrescriptionAction extends Action{
  public function run(Request $request){
    $data = [
      'doctor_id' => $request->doctor_id,
      'user_id' => $request->user_id,
      'appointment_id' => $request->appointment_id,
      'first_name' => $request->first_name,
      'last_name' => $request->last_name,
      'email' => $request->email,
      'phone' => $request->phone,
      'gender' => $request->gender,
      'profile' => $request->profile,
      'reason' => $request->reason,
    ];

    $prescription =  Apiato::call('Prescription@CreatePrescriptionTask', [$data]);
    //$msg = "Bonjour  " . $prescription->first_name . ", votre demande de rendez-vous avec le Dr " . $prescription->doctor->first_name . " " . $prescription->doctor->last_name . " a été approuvé et aura lieu à ".$prescription->doctor->address." le " . $prescription->date . " à " . str_replace(":", "h", $prescription->start_time);
    $msgFromDb =Sms::query()->where('type', '=', 'prescription')->where('doctor_id', '=',$prescription->doctor->real_id )->limit(1)->get()[0] ;
    //Sms::query()->where()->get()
    print_r($msgFromDb);
    $msg = $msgFromDb->messagegg;
    $msg = str_replace("<doctor_first_name>", $prescription->doctor->first_name, $msg);
    $msg =  str_replace("<doctor_address>", $prescription->doctor->address, $msg );
    $msg = str_replace("<patient_first_name>", $prescription->first_name, $msg );
    $msg = str_replace("<patient_last_name>", $prescription->last_name, $msg );
    $msg = str_replace("<patient_gender>", $prescription->gender , $msg);
    $msg = str_replace("<patient_profile>", $prescription->profile, $msg);
    $msg = str_replace("<prescription_date>", $prescription->created_at, $msg);
    $msg = str_replace("<prescription_reason>", $prescription->reason, $msg);

    file_get_contents("https://api.bulksmsonline.com:9090/smsapi?username=KouaPr260&password=bulkbib&type=t&to=" . $prescription->phone . "&source=Toobibs&message=" . urlencode($msg));

    return $prescription;
  }
}
