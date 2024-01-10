<?php

namespace App\Containers\Speciality\UI\API\Controllers;

use App\Containers\Speciality\UI\API\Requests\CreateSpecialityRequest;
use App\Containers\Speciality\UI\API\Requests\DeleteSpecialityRequest;
use App\Containers\Speciality\UI\API\Requests\GetAllSpecialitiesRequest;
use App\Containers\Speciality\UI\API\Requests\FindSpecialityByIdRequest;
use App\Containers\Speciality\UI\API\Requests\UpdateSpecialityRequest;
use App\Containers\Speciality\UI\API\Transformers\SpecialityTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Speciality\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateSpecialityRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSpeciality(CreateSpecialityRequest $request)
    {
        $speciality = Apiato::call('Speciality@CreateSpecialityAction', [$request]);

        return $this->created($this->transform($speciality, SpecialityTransformer::class));
    }

    /**
     * @param FindSpecialityByIdRequest $request
     * @return array
     */
    public function findSpecialityById(FindSpecialityByIdRequest $request)
    {
        $speciality = Apiato::call('Speciality@FindSpecialityByIdAction', [$request]);

        return $this->transform($speciality, SpecialityTransformer::class);
    }

    /**
     * @param GetAllSpecialitiesRequest $request
     * @return array
     */
    public function getAllSpecialities(GetAllSpecialitiesRequest $request)
    {
        $specialities = Apiato::call('Speciality@GetAllSpecialitiesAction', [$request]);

        return $this->transform($specialities, SpecialityTransformer::class);
    }
    public function getSpecialityAuth(GetAllSpecialitiesRequest $request)
    {
        $specialities = Apiato::call('Speciality@GetAllSpecialitiesAction', [$request]);

        return $this->transform($specialities, SpecialityTransformer::class);
    }

    /**
     * @param UpdateSpecialityRequest $request
     * @return array
     */
    public function updateSpeciality(UpdateSpecialityRequest $request)
    {
        $speciality = Apiato::call('Speciality@UpdateSpecialityAction', [$request]);

        return $this->transform($speciality, SpecialityTransformer::class);
    }

    /**
     * @param DeleteSpecialityRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSpeciality(DeleteSpecialityRequest $request)
    {
        Apiato::call('Speciality@DeleteSpecialityAction', [$request]);

        return $this->noContent();
    }
}
