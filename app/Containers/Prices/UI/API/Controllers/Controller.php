<?php

namespace App\Containers\Prices\UI\API\Controllers;

use App\Containers\Prices\UI\API\Requests\CreatePricesRequest;
use App\Containers\Prices\UI\API\Requests\DeletePricesRequest;
use App\Containers\Prices\UI\API\Requests\GetAllPricesRequest;
use App\Containers\Prices\UI\API\Requests\FindPricesByIdRequest;
use App\Containers\Prices\UI\API\Requests\UpdatePricesRequest;
use App\Containers\Prices\UI\API\Transformers\PricesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Prices\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreatePricesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createPrices(CreatePricesRequest $request)
    {
        $prices = Apiato::call('Prices@CreatePricesAction', [$request]);

        return $this->created($this->transform($prices, PricesTransformer::class));
    }

    /**
     * @param FindPricesByIdRequest $request
     * @return array
     */
    public function findPricesById(FindPricesByIdRequest $request)
    {
        $prices = Apiato::call('Prices@FindPricesByIdAction', [$request]);

        return $this->transform($prices, PricesTransformer::class);
    }

    /**
     * @param GetAllPricesRequest $request
     * @return array
     */
    public function getAllPrices(GetAllPricesRequest $request)
    {
        $prices = Apiato::call('Prices@GetAllPricesAction', [$request]);

        return $this->transform($prices, PricesTransformer::class);
    }

    /**
     * @param UpdatePricesRequest $request
     * @return array
     */
    public function updatePrices(UpdatePricesRequest $request)
    {
        $prices = Apiato::call('Prices@UpdatePricesAction', [$request]);

        return $this->transform($prices, PricesTransformer::class);
    }

    /**
     * @param DeletePricesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deletePrices(DeletePricesRequest $request)
    {
        Apiato::call('Prices@DeletePricesAction', [$request]);

        return $this->noContent();
    }
}
