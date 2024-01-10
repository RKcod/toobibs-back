<?php

namespace App\Containers\Appointment\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

class ReminderAction extends Action
{
    public function run(Request $request)
    {
        // $var = Apiato::call('Container@Task', [$arg1, $arg2, ...]);
      $date = new \DateTime();
      $interval = new \DateInterval('P1D');
      $date->add($interval);

      $alert = 0;
      $appointments = Apiato::call('Appointment@ReminderTask', [$date->format("Y-m-d"), 'alert', $alert]);
      $appointments_2 = Apiato::call('Appointment@ReminderTask', [date("Y-m-d"), 'alert_today', $alert]);

      if(count($appointments_2) > 0){
        foreach ($appointments_2 as $appointment){
          $msg = "Bonjour " . $appointment->first_name . ", votre rendez-vous avec le Dr " . $appointment->doctor->first_name . " " . $appointment->doctor->last_name . " est prévu pour aujourd'hui à " . str_replace(":", "h", $appointment->time);

          $phone = $appointment->phone;
          /*if(str_contains("+", $phone)){
            $phone = str_replace("+", "", $phone);
          }
          if(!str_contains("237", $phone)){
            $phone = "237".$phone;
          }*/

          //if($appointment->type != "Téléconsultation")
          file_get_contents("hhttps://api-mapper.clicksend.com/http/v2/send.php?method=http&username=ronaldo.kana@isdg-sarl.com&key=A018CADB-8D14-F116-AD67-B0DFFE0990F5&to=" . $phone . "&source=Toobibs&message=" . urlencode($msg));

          $data = [
            'alert_today' => 1
          ];
          $data = array_filter($data);

          Apiato::call('Appointment@UpdateAppointmentTask', [$appointment->id, $data]);
        }
      }
      if(count($appointments) > 0){
        foreach ($appointments as $appointment){
          $msg = "Bonjour " . $appointment->first_name . ", votre rendez-vous avec le Dr " . $appointment->doctor->first_name . " " . $appointment->doctor->last_name . " est prévu pour demain à " . str_replace(":", "h", $appointment->time);

          $phone = $appointment->phone;
          /*if(str_contains("+", $phone)){
            $phone = str_replace("+", "", $phone);
          }
          if(!str_contains("237", $phone)){
            $phone = "237".$phone;
          }*/

          //if($appointment->type != "Téléconsultation")
          file_get_contents("https://api-mapper.clicksend.com/http/v2/send.php?method=http&username=ronaldo.kana@isdg-sarl.com&key=A018CADB-8D14-F116-AD67-B0DFFE0990F5&to=" . $phone . "&source=Toobibs&message=" . urlencode($msg));

          $data = [
            'alert' => 1
          ];
          $data = array_filter($data);

          Apiato::call('Appointment@UpdateAppointmentTask', [$appointment->id, $data]);
        }
      }
      return $appointments;
    }
}
