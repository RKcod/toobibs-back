<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Containers\Appointment\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class Sendsms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sms:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send SMS to patients 1 hour before their appointment';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
	 echo "test test " .PHP_EOL;
         // Récupérez les rendez-vous du jour
         $appointments = Appointment::whereDate('date', Carbon::today())->get();
         $now = Carbon::now();
            foreach ($appointments as $appointment) {
	            $time_request=Carbon::parse($appointment->time);
		
                if ( ($now->diffInMinutes($time_request) >=55) && ($now->diffInMinutes($time_request)<=60 || $now->diffInMinutes($time_request)<=90 ) && $time_request->greaterThan($now) ) {

                  $doctor_name_db = DB::table('users')
                  ->select('first_name')
                  ->where('id', $appointment->doctor_id)
                  ->first()
                  ->first_name;
                 
                  $doctor_address=DB::table('users')
                  ->select('address')
                  ->where('id',$appointment->doctor_id)
                  ->first()->address; 
		 if(empty($appointment->doctorName)){
			$doctor_name= "Dr ".$doctor_name_db;
		 }else{
			$doctor_name= "le ".$appointment->doctorSpeciality." Dr ".$appointment->doctorName;
		 }
                  if($appointment->type == "Consult au cabinet"){
                    $msg = "Bonjour " . $appointment->first_name . ". Pour rappel vous avez rendez-vous avec " . $doctor_name .  " à l'adresse ".$doctor_address.",le ".$appointment->date ." à " . str_replace(":", "h", $appointment->time);
                  }else if($appointment->type == "Consult à domicile"){
                    $msg = "Bonjour " . $appointment->first_name . ". Pour rappel vous avez rendez-vous avec " . $doctor_name .  " à votre domicile: ".$appointment->address.",le ".$appointment->date ." à " . str_replace(":", "h", $appointment->time);
                  }else if($appointment->type == "Téléconsultation"){
                    $msg = "Bonjour " . $appointment->first_name . ". Pour rappel vous avez rendez-vous avec " . $doctor_name .  " en Téléconsultation le ".$appointment->date ." à " . str_replace(":", "h", $appointment->time)."\n Pensez à vous munir de votre téléphone chargé dans un endroit calme et avec une bonne connexion.";
                  }else{
                    $msg = "Bonjour " . $appointment->first_name . ". Pour rappel vous avez rendez-vous avec " . $doctor_name .  " à l'adresse ".$doctor_address.",le ".$appointment->date ." à " . str_replace(":", "h", $appointment->time);
                  }
                   $phone = $appointment->phone;

                  file_get_contents("https://api-mapper.clicksend.com/http/v2/send.php?method=http&username=yankouek@yahoo.fr&key=13929160-1795-068C-AADC-DF45FC440DD7&to=" . $phone . "&source=Toobibs&message=" . urlencode($msg));
                 }

            }
		
            $appointment_yesteday=Appointment::whereDate('date', Carbon::tomorrow())->get();
            $now =Carbon::now();
            foreach ($appointment_yesteday as $appointment) {
                if ( $now->hour === 21 && $now->minute === 00 ) {

                  $doctor_name_db = DB::table('users')
                  ->select('first_name')
                  ->where('id', $appointment->doctor_id)
                  ->first()
                  ->first_name;
		 if(empty($appointment->doctorName)){
		 	$doctor_name= "Dr ".$doctor_name_db;
                 }else{
			$doctor_name= "le ".$appointment->doctorSpeciality." Dr ".$appointment->doctorName;
		 }
		
                  $doctor_address=DB::table('users')
                    ->select('address')
                    ->where('id',$appointment->doctor_id)->first()->address;
                  
                  if($appointment->type == "Consult au cabinet"){
                    $msg = "Bonjour " . $appointment->first_name . ". Pour rappel vous avez rendez-vous avec " . $doctor_name .  " à l'adresse ".$doctor_address.",le ".$appointment->date ." à " . str_replace(":", "h", $appointment->time);
                  }else if($appointment->type == "Consult à domicile"){
                    $msg = "Bonjour " . $appointment->first_name . ". Pour rappel vous avez rendez-vous avec " . $doctor_name .  " à votre domicile: ".$appointment->address.",le ".$appointment->date ." à " . str_replace(":", "h", $appointment->time);
                  }else if($appointment->type == "Téléconsultation"){
                    $msg = "Bonjour " . $appointment->first_name . ". Pour rappel vous avez rendez-vous avec " . $doctor_name .  " en Téléconsultation le ".$appointment->date ." à " . str_replace(":", "h", $appointment->time)."\n Pensez à vous munir de votre téléphone chargé dans un endroit calme et avec une bonne connexion.";
                  }else{
                    $msg = "Bonjour " . $appointment->first_name . ". Pour rappel vous avez rendez-vous avec " . $doctor_name .  " à l'adresse ".$doctor_address.",le ".$appointment->date ." à " . str_replace(":", "h", $appointment->time);
                  }
                  
                   $phone = $appointment->phone;

                 file_get_contents("https://api-mapper.clicksend.com/http/v2/send.php?method=http&username=yankouek@yahoo.fr&key=13929160-1795-068C-AADC-DF45FC440DD7&to=" . $phone . "&source=Toobibs&message=" . urlencode($msg));
                 }

            }
        
    }
}
