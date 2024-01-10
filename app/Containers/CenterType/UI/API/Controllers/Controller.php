<?php

namespace App\Containers\CenterType\UI\API\Controllers;

use App\Containers\CenterType\UI\API\Requests\CreateCenterTypeRequest;
use App\Containers\CenterType\UI\API\Requests\DeleteCenterTypeRequest;
use App\Containers\CenterType\UI\API\Requests\GetAllCenterTypesRequest;
use App\Containers\CenterType\UI\API\Requests\FindCenterTypeByIdRequest;
use App\Containers\CenterType\UI\API\Requests\UpdateCenterTypeRequest;
use App\Containers\CenterType\UI\API\Transformers\CenterTypeTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\CenterType\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateCenterTypeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCenterType(CreateCenterTypeRequest $request)
    {
        $centertype = Apiato::call('CenterType@CreateCenterTypeAction', [$request]);

        return $this->created($this->transform($centertype, CenterTypeTransformer::class));
    }

    /**
     * @param FindCenterTypeByIdRequest $request
     * @return array
     */
    public function findCenterTypeById(FindCenterTypeByIdRequest $request)
    {
        $centertype = Apiato::call('CenterType@FindCenterTypeByIdAction', [$request]);

        return $this->transform($centertype, CenterTypeTransformer::class);
    }

    /**
     * @param GetAllCenterTypesRequest $request
     * @return array
     */
    public function getAllCenterTypes(GetAllCenterTypesRequest $request)
    {
        $centertypes = Apiato::call('CenterType@GetAllCenterTypesAction', [$request]);

        return $this->transform($centertypes, CenterTypeTransformer::class);
    }

    /**
     * @param UpdateCenterTypeRequest $request
     * @return array
     */
    public function updateCenterType(UpdateCenterTypeRequest $request)
    {
        $centertype = Apiato::call('CenterType@UpdateCenterTypeAction', [$request]);

        return $this->transform($centertype, CenterTypeTransformer::class);
    }

    /**
     * @param DeleteCenterTypeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCenterType(DeleteCenterTypeRequest $request)
    {
        Apiato::call('CenterType@DeleteCenterTypeAction', [$request]);

        return $this->noContent();
    }
}
