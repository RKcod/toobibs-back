<?php

namespace App\Containers\Appointment\Actions;

use App\Containers\Availability\Models\Availability;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateAppointmentAction extends Action
{
  public function run(Request $request)
  {

    if($request->exists("is_doctor")){


      $exist = Apiato::call('Availability@FindByDateAndTimeTask', [$request->date, $request->time]);

      if($exist != null){
        $request->time = $exist->id;
      }
      else {
        /*$av = [
          'date' => $request->date,
          'start_time' => $request->time,
          'end_time' => null,
          'description' => null,
          'users_id' => $request->doctor_id,
        ];
        $av = array_filter($av);
        $d = Apiato::call('Availability@FindAvailabilityByIdTask', [$request->time]);*/


        $av = new Availability();
        $av->setAttribute("date", $request->date);
        $av->setAttribute("start_time", $request->time);
        $av->setAttribute("end_time", null);
        $av->setAttribute("description", "");
        $av->setAttribute("users_id", $request->doctor_id);
        $av->save();
        $request->time = $av->id;
      }


    }

    $availability = Apiato::call('Availability@FindAvailabilityByIdTask', [$request->time]);

    $data = [
      'users_id' => $request->users_id,
      'date' => $request->date,
      'time' => $availability->start_time,
      'motif' => $request->motif,
      'type' => $request->type,
      'first_name' => $request->first_name,
      'last_name' => $request->last_name,
      'email' => $request->email,
      'phone' => $request->phone,
      'address' => $request->address,
      'is_me' => $request->is_me,
      'teleconsult' => $request->teleconsult,
      'status' => 1,
      'cost' => $request->cost,
      'currency' => $request->currency,
      'doctorName' => $request->doctorName,
      'doctorSpeciality'=> $request->doctorSpeciality,
      'doctor_id' => $request->doctor_id,
      'payment_method' => $request->payment_method,
    ];
    //$data = array_filter($data);

    $appointment = Apiato::call('Appointment@CreateAppointmentTask', [$data]);
    

    $data_ = [
      'status' => 1,
    ];

    $availability = Apiato::call('Availability@UpdateAvailabilityTask', [$request->time, $data_]);

    if($appointment->type == "Consultation à domicile"){
      $address=$appointment->address;
    }else{
      $address=$appointment->doctor->address;
    }

    if(empty($appointment->doctorName)){
    	$doctorName=  "le Dr " . $appointment->doctor->first_name . " " . $appointment->doctor->last_name;  
    }else{
	$doctorName = " le " . $appointment->doctorSpeciality . " " . $appointment->doctorName;
    }
    $msg = "Bonjour " . $appointment->first_name . ", votre demande de rendez-vous avec " . $doctorName  . " a été approuvé et aura lieu à ".$address." le " . $appointment->date . " à " . str_replace(":", "h", $availability->start_time);

    $phone = $appointment->phone;

      file_get_contents("https://api-mapper.clicksend.com/http/v2/send.php?method=http&username=yankouek@yahoo.fr&key=13929160-1795-068C-AADC-DF45FC440DD7&to=" . $phone . "&source=Toobibs&message=" . urlencode($msg));

    return $appointment;
  }
}
