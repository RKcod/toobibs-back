<?php

namespace App\Containers\Appointment\UI\API\Controllers;

use App\Containers\Appointment\UI\API\Requests\CreateAppointmentRequest;
use App\Containers\Appointment\UI\API\Requests\DeleteAppointmentRequest;
use App\Containers\Appointment\UI\API\Requests\GetAllAppointmentsRequest;
use App\Containers\Appointment\UI\API\Requests\FindAppointmentByIdRequest;
use App\Containers\Appointment\UI\API\Requests\UpdateAppointmentRequest;
use App\Containers\Appointment\UI\API\Transformers\AppointmentTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\DB;

/**
 * Class Controller
 *
 * @package App\Containers\Appointment\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateAppointmentRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createAppointment(CreateAppointmentRequest $request)
    {
        $appointment = Apiato::call('Appointment@CreateAppointmentAction', [$request]);

        return $this->created($this->transform($appointment, AppointmentTransformer::class));
    }

    /**
     * @param FindAppointmentByIdRequest $request
     * @return array
     */
    public function findAppointmentById(FindAppointmentByIdRequest $request)
    {
        $appointment = Apiato::call('Appointment@FindAppointmentByIdAction', [$request]);

        return $this->transform($appointment, AppointmentTransformer::class);
    }

    /**
     * @param GetAllAppointmentsRequest $request
     * @return array
     */
    public function getAllAppointments(GetAllAppointmentsRequest $request)
    {
        $appointments = Apiato::call('Appointment@GetAllAppointmentsAction', [$request]);

        return $this->transform($appointments, AppointmentTransformer::class);
    }
    public function reminder(GetAllAppointmentsRequest $request)
    {
        $appointments = Apiato::call('Appointment@ReminderAction', [$request]);

        return $this->transform($appointments, AppointmentTransformer::class);
    }
    public function searchAppointments(GetAllAppointmentsRequest $request)
    {
        $appointments = Apiato::call('Appointment@SearchAppointmentAction', [$request]);

        return $this->transform($appointments, AppointmentTransformer::class);
    }

    /**
     * @param UpdateAppointmentRequest $request
     * @return array
     */
    public function updateAppointment(UpdateAppointmentRequest $request)
    {
        $appointment = Apiato::call('Appointment@UpdateAppointmentAction', [$request]);

        return $this->transform($appointment, AppointmentTransformer::class);
    }

    /**
     * @param DeleteAppointmentRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteAppointment(DeleteAppointmentRequest $request)
    {
        Apiato::call('Appointment@DeleteAppointmentAction', [$request]);

        return $this->noContent();
    }

    public function getPatients(GetAllAppointmentsRequest $request){
      $name='';
      if($request->name){$name=$request->name;}
       $patients=DB::table('appointments')
	->select('*')
	->where('doctor_id','=',$request->doctorId)
	//->where('users_id','<>',$request->doctorId)
	->when($name,function($query,$name){
	   return $query->where(function($query) use ($name){
	     $query->where('first_name','LIKE','%'. $name . '%')
		   ->orWhere('last_name','LIKE','%' .$name . '%');	
           });
	})->orderBy('created_at','desc')	
	->groupBy('phone')
	->get();
       return response()->json($patients);
    }

   public function getAppointsPatients(GetAllAppointmentsRequest $request){
	$start='';
	$end='';
	$status=0;
	if($request->start){$start=$request->start;}
	if($request->end){$end=$request->end;}
	if($request->status){$status=$request->status;}
	$appoints=DB::table('appointments')
	->select('*')
	->where('phone','=',$request->phone)
	->where('doctor_id','=',$request->doctorId)
	->when($start,function($query,$start){
		return $query->where('created_at','>=',$start);	
	})
	->when($end,function($query,$end){
		return $query->where('created_at','<=',$end);
	})
	->when($status,function($query,$status){
		return $query->where('status','=',$status);
	})
	->get();
	return response()->json($appoints);
  }


}
