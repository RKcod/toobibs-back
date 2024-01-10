<?php

namespace App\Containers\CenterOffers\UI\API\Controllers;

use App\Containers\CenterOffers\UI\API\Requests\CreateCenterOffersRequest;
use App\Containers\CenterOffers\UI\API\Requests\DeleteCenterOffersRequest;
use App\Containers\CenterOffers\UI\API\Requests\GetAllCenterOffersRequest;
use App\Containers\CenterOffers\UI\API\Requests\FindCenterOffersByIdRequest;
use App\Containers\CenterOffers\UI\API\Requests\UpdateCenterOffersRequest;
use App\Containers\CenterOffers\UI\API\Transformers\CenterOffersTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\CenterOffers\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateCenterOffersRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCenterOffers(CreateCenterOffersRequest $request)
    {
        $centeroffers = Apiato::call('CenterOffers@CreateCenterOffersAction', [$request]);

        return $this->created($this->transform($centeroffers, CenterOffersTransformer::class));
    }

    /**
     * @param FindCenterOffersByIdRequest $request
     * @return array
     */
    public function findCenterOffersById(FindCenterOffersByIdRequest $request)
    {
        $centeroffers = Apiato::call('CenterOffers@FindCenterOffersByIdAction', [$request]);

        return $this->transform($centeroffers, CenterOffersTransformer::class);
    }

    /**
     * @param GetAllCenterOffersRequest $request
     * @return array
     */
    public function getAllCenterOffers(GetAllCenterOffersRequest $request)
    {
        $centeroffers = Apiato::call('CenterOffers@GetAllCenterOffersAction', [$request]);

        return $this->transform($centeroffers, CenterOffersTransformer::class);
    }

    /**
     * @param UpdateCenterOffersRequest $request
     * @return array
     */
    public function updateCenterOffers(UpdateCenterOffersRequest $request)
    {
        $centeroffers = Apiato::call('CenterOffers@UpdateCenterOffersAction', [$request]);

        return $this->transform($centeroffers, CenterOffersTransformer::class);
    }

    /**
     * @param DeleteCenterOffersRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCenterOffers(DeleteCenterOffersRequest $request)
    {
        Apiato::call('CenterOffers@DeleteCenterOffersAction', [$request]);

        return $this->noContent();
    }
}
