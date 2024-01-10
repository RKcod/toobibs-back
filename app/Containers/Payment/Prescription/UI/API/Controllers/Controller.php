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
}
