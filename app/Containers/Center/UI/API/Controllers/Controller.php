<?php

namespace App\Containers\Center\UI\API\Controllers;

use App\Containers\Center\UI\API\Requests\CreateCenterRequest;
use App\Containers\Center\UI\API\Requests\DeleteCenterRequest;
use App\Containers\Center\UI\API\Requests\GetAllCentersRequest;
use App\Containers\Center\UI\API\Requests\FindCenterByIdRequest;
use App\Containers\Center\UI\API\Requests\UpdateCenterRequest;
use App\Containers\Center\UI\API\Transformers\CenterTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Center\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateCenterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCenter(CreateCenterRequest $request)
    {
        $center = Apiato::call('Center@CreateCenterAction', [$request]);

        return $this->created($this->transform($center, CenterTransformer::class));
    }

    /**
     * @param FindCenterByIdRequest $request
     * @return array
     */
    public function findCenterById(FindCenterByIdRequest $request)
    {
        $center = Apiato::call('Center@FindCenterByIdAction', [$request]);

        return $this->transform($center, CenterTransformer::class);
    }

    /**
     * @param GetAllCentersRequest $request
     * @return array
     */
    public function getAllCenters(GetAllCentersRequest $request)
    {
        $centers = Apiato::call('Center@GetAllCentersAction', [$request]);

        return $this->transform($centers, CenterTransformer::class);
    }

    /**
     * @param UpdateCenterRequest $request
     * @return array
     */
    public function updateCenter(UpdateCenterRequest $request)
    {
        $center = Apiato::call('Center@UpdateCenterAction', [$request]);

        return $this->transform($center, CenterTransformer::class);
    }

    /**
     * @param DeleteCenterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCenter(DeleteCenterRequest $request)
    {
        Apiato::call('Center@DeleteCenterAction', [$request]);

        return $this->noContent();
    }
}
