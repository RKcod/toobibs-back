<?php

namespace App\Containers\PrescriptionMedecine\UI\API\Controllers;

use App\Containers\PrescriptionMedecine\UI\API\Requests\CreatePrescriptionMedecineRequest;
use App\Containers\PrescriptionMedecine\UI\API\Requests\DeletePrescriptionMedecineRequest;
use App\Containers\PrescriptionMedecine\UI\API\Requests\GetAllPrescriptionMedecinesRequest;
use App\Containers\PrescriptionMedecine\UI\API\Requests\FindPrescriptionMedecineByIdRequest;
use App\Containers\PrescriptionMedecine\UI\API\Requests\UpdatePrescriptionMedecineRequest;
use App\Containers\PrescriptionMedecine\UI\API\Transformers\PrescriptionMedecineTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\PrescriptionMedecine\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreatePrescriptionMedecineRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createPrescriptionMedecine(CreatePrescriptionMedecineRequest $request)
    {
        $prescriptionmedecine = Apiato::call('PrescriptionMedecine@CreatePrescriptionMedecineAction', [$request]);

        return $this->created($this->transform($prescriptionmedecine, PrescriptionMedecineTransformer::class));
    }

    /**
     * @param FindPrescriptionMedecineByIdRequest $request
     * @return array
     */
    public function findPrescriptionMedecineById(FindPrescriptionMedecineByIdRequest $request)
    {
        $prescriptionmedecine = Apiato::call('PrescriptionMedecine@FindPrescriptionMedecineByIdAction', [$request]);

        return $this->transform($prescriptionmedecine, PrescriptionMedecineTransformer::class);
    }

    /**
     * @param GetAllPrescriptionMedecinesRequest $request
     * @return array
     */
    public function getAllPrescriptionMedecines(GetAllPrescriptionMedecinesRequest $request)
    {
        $prescriptionmedecines = Apiato::call('PrescriptionMedecine@GetAllPrescriptionMedecinesAction', [$request]);

        return $this->transform($prescriptionmedecines, PrescriptionMedecineTransformer::class);
    }

    /**
     * @param UpdatePrescriptionMedecineRequest $request
     * @return array
     */
    public function updatePrescriptionMedecine(UpdatePrescriptionMedecineRequest $request)
    {
        $prescriptionmedecine = Apiato::call('PrescriptionMedecine@UpdatePrescriptionMedecineAction', [$request]);

        return $this->transform($prescriptionmedecine, PrescriptionMedecineTransformer::class);
    }

    /**
     * @param DeletePrescriptionMedecineRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deletePrescriptionMedecine(DeletePrescriptionMedecineRequest $request)
    {
        Apiato::call('PrescriptionMedecine@DeletePrescriptionMedecineAction', [$request]);

        return $this->noContent();
    }
}
