<?php

namespace App\Containers\Prescription\UI\API\Controllers;

use App\Containers\Prescription\UI\API\Requests\CreatePrescriptionRequest;
use App\Containers\Prescription\UI\API\Requests\DeletePrescriptionRequest;
use App\Containers\Prescription\UI\API\Requests\GetAllPrescriptionsRequest;
use App\Containers\Prescription\UI\API\Requests\FindPrescriptionByIdRequest;
use App\Containers\Prescription\UI\API\Requests\UpdatePrescriptionRequest;
use App\Containers\Prescription\UI\API\Transformers\PrescriptionTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\DB;
use App\Ship\Parents\Requests\Request;
/**
 * Class Controller
 *
 * @package App\Containers\Prescription\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreatePrescriptionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createPrescription(CreatePrescriptionRequest $request)
    {
        $prescription = Apiato::call('Prescription@CreatePrescriptionAction', [$request]);

        return $this->created($this->transform($prescription, PrescriptionTransformer::class));
    }

    /**
     * @param FindPrescriptionByIdRequest $request
     * @return array
     */
    public function findPrescriptionById(FindPrescriptionByIdRequest $request)
    {
        $prescription = Apiato::call('Prescription@FindPrescriptionByIdAction', [$request]);

        return $this->transform($prescription, PrescriptionTransformer::class);
    }

    /**
     * @param GetAllPrescriptionsRequest $request
     * @return array
     */
    public function getAllPrescriptions(GetAllPrescriptionsRequest $request)
    {
        $prescriptions = Apiato::call('Prescription@GetAllPrescriptionsAction', [$request]);

        return $this->transform($prescriptions, PrescriptionTransformer::class);
    }

    /**
     * @param UpdatePrescriptionRequest $request
     * @return array
     */
    public function updatePrescription(UpdatePrescriptionRequest $request)
    {
        $prescription = Apiato::call('Prescription@UpdatePrescriptionAction', [$request]);

        return $this->transform($prescription, PrescriptionTransformer::class);
    }

    /**
     * @param DeletePrescriptionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deletePrescription(DeletePrescriptionRequest $request)
    {
        Apiato::call('Prescription@DeletePrescriptionAction', [$request]);

        return $this->noContent();
    }

    public function getPrescriptionPatient(GetAllPrescriptionsRequest $request){
	$name='';
	$reason='';
	if($request->name){$name=$request->name;}
	if($request->reason){$reason=$request->reason;}
   	$prescriptions=DB::table('prescriptionmedecines')
        ->join('prescriptions as p','prescriptionmedecines.prescription_id','=','p.id')
	->join('medecines as m','prescriptionmedecines.medicine_id','=','m.id')
	->select('prescriptionmedecines.*','p.*','m.*')
	->where('p.phone','=',$request->phone)
        ->where('p.doctor_id','=',$request->doctorId)
	->when($name,function($query,$name){
	 return $query->where('m.name',$name);
	})
	->when($reason,function($query,$reason){
		return $query->where('p.reason','LIKE','%'.$reason.'%');
	})
	->get();
	return response()->json($prescriptions);
   }
}
