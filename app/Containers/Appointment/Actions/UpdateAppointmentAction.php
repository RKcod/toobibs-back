<?php

namespace App\Containers\Appointment\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\DB;

class UpdateAppointmentAction extends Action
{
  public function run(Request $request)
  {

    $data = [
      'users_id' => $request->users_id,
      'date' => $request->date,
      'time' => $request->time,
      'motif' => $request->motif,
      'type' => $request->type,
      'status' => $request->status,
      'doctor_id' => $request->doctor_id,
    ];
    $data = array_filter($data);

    $appointment = Apiato::call('Appointment@UpdateAppointmentTask', [$request->id, $data]);


    if($request->exists("cancel")){

      $results = DB::select("UPDATE availabilities SET status=0 WHERE `date`='".$appointment->date."' and `start_time`='".$appointment->time."' and users_id='".$appointment->doctor_id."'");

      if($request->initiated_by == "PATIENT"){
        $msg = "Bonjour " . $appointment->doctor->first_name . ", votre rendez-vous avec le patient " . $appointment->first_name . " " . $appointment->last_name . "  du " . $appointment->date . " à " . str_replace(":", "h", $appointment->time." à été annulé par le patient");

        $phone = $appointment->doctor->phone;


        $msg_p = "Bonjour " . $appointment->user->first_name . ", suite à l'annulation de votre rendez-vous, vous serrez remboursé dans les prochaines 72 heures.";

        $phone_p = $appointment->phone;
        file_get_contents("https://api-mapper.clicksend.com/http/v2/send.php?method=http&username=ronaldo.kana@isdg-sarl.com&key=A018CADB-8D14-F116-AD67-B0DFFE0990F5&to=" . $phone_p . "&source=Toobibs&message=" . urlencode($msg_p));

      }
      else{
        $msg = "Bonjour " . $appointment->user->first_name . ", votre rendez-vous avec le médécin " . $appointment->doctor->first_name . " " . $appointment->doctor->last_name . "  du " . $appointment->date . " à " . str_replace(":", "h", $appointment->time." à été annulé par le médécin. Vous serrez rembourser dans les prochaines 72 heures.");

        $phone = $appointment->phone;


      }



      file_get_contents("https://api-mapper.clicksend.com/http/v2/send.php?method=http&username=ronaldo.kana@isdg-sarl.com&key=A018CADB-8D14-F116-AD67-B0DFFE0990F5&to=" . $phone . "&source=Toobibs&message=" . urlencode($msg));

      //$availability = Apiato::call('Availability@UpdateAvailabilityTask', [$request->time, $data_]);
    }

    if($request->exists("rembourssement")){
      $msg_p = "Bonjour " . $appointment->user->first_name . ", le remboursement des frais de consultation à été éffectuer avec succès";

      $phone_p = $appointment->phone;
      file_get_contents("https://api-mapper.clicksend.com/http/v2/send.php?method=http&username=ronaldo.kana@isdg-sarl.com&key=A018CADB-8D14-F116-AD67-B0DFFE0990F5&to=" . $phone_p . "&source=Toobibs&message=" . urlencode($msg_p));

    }
    //$msg = "Bonjour " . $appointment->first_name . ", votre paiement pour le rendez-vous avec le Dr " . $appointment->doctor->first_name . " " . $appointment->doctor->last_name . " a bien été éffectuer";
    /*} else {
      $msg = "Bonjour " . $appointment->first_name . ", votre demande de rendez-vous avec le Dr " . $appointment->doctor->first_name . " " . $appointment->doctor->last_name . " a été rejeté";
    }*/
   // file_get_contents("https://api-mapper.clicksend.com/http/v2/send.php?method=http&username=ronaldo.kana@isdg-sarl.com&key=A018CADB-8D14-F116-AD67-B0DFFE0990F5&to=" . $appointment->phone . "&source=Toobibs&message=" . urlencode($msg));


    return $appointment;
  }
}
