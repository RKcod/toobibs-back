<?php

namespace App\Containers\Medecine\UI\API\Controllers;

use App\Containers\Medecine\UI\API\Requests\CreateMedecineRequest;
use App\Containers\Medecine\UI\API\Requests\DeleteMedecineRequest;
use App\Containers\Medecine\UI\API\Requests\GetAllMedecinesRequest;
use App\Containers\Medecine\UI\API\Requests\FindMedecineByIdRequest;
use App\Containers\Medecine\UI\API\Requests\UpdateMedecineRequest;
use App\Containers\Medecine\UI\API\Transformers\MedecineTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Medecine\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateMedecineRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createMedecine(CreateMedecineRequest $request)
    {
        $medecine = Apiato::call('Medecine@CreateMedecineAction', [$request]);

        return $this->created($this->transform($medecine, MedecineTransformer::class));
    }

    /**
     * @param FindMedecineByIdRequest $request
     * @return array
     */
    public function findMedecineById(FindMedecineByIdRequest $request)
    {
        $medecine = Apiato::call('Medecine@FindMedecineByIdAction', [$request]);

        return $this->transform($medecine, MedecineTransformer::class);
    }

    /**
     * @param GetAllMedecinesRequest $request
     * @return array
     */
    public function getAllMedecines(GetAllMedecinesRequest $request)
    {
        $medecines = Apiato::call('Medecine@GetAllMedecinesAction', [$request]);

        return $this->transform($medecines, MedecineTransformer::class);
    }

    /**
     * @param UpdateMedecineRequest $request
     * @return array
     */
    public function updateMedecine(UpdateMedecineRequest $request)
    {
        $medecine = Apiato::call('Medecine@UpdateMedecineAction', [$request]);

        return $this->transform($medecine, MedecineTransformer::class);
    }

    /**
     * @param DeleteMedecineRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteMedecine(DeleteMedecineRequest $request)
    {
        Apiato::call('Medecine@DeleteMedecineAction', [$request]);

        return $this->noContent();
    }
}
