<?php

namespace App\Containers\AppSection\Adress\UI\API\Controllers;

use App\Containers\AppSection\Adress\UI\API\Requests\CreateAdressRequest;
use App\Containers\AppSection\Adress\UI\API\Requests\DeleteAdressRequest;
use App\Containers\AppSection\Adress\UI\API\Requests\GetAllAdressesRequest;
use App\Containers\AppSection\Adress\UI\API\Requests\FindAdressByIdRequest;
use App\Containers\AppSection\Adress\UI\API\Requests\UpdateAdressRequest;
use App\Containers\AppSection\Adress\UI\API\Transformers\AdressTransformer;
use App\Containers\AppSection\Adress\Actions\CreateAdressAction;
use App\Containers\AppSection\Adress\Actions\FindAdressByIdAction;
use App\Containers\AppSection\Adress\Actions\GetAllAdressesAction;
use App\Containers\AppSection\Adress\Actions\UpdateAdressAction;
use App\Containers\AppSection\Adress\Actions\DeleteAdressAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createAdress(CreateAdressRequest $request): JsonResponse
    {
        $adress = app(CreateAdressAction::class)->run($request);
        return $this->created($this->transform($adress, AdressTransformer::class));
    }

    public function findAdressById(FindAdressByIdRequest $request): array
    {
        $adress = app(FindAdressByIdAction::class)->run($request);
        return $this->transform($adress, AdressTransformer::class);
    }

    public function getAllAdresses(GetAllAdressesRequest $request): array
    {
        $adresses = app(GetAllAdressesAction::class)->run($request);
        return $this->transform($adresses, AdressTransformer::class);
    }

    public function updateAdress(UpdateAdressRequest $request): array
    {
        $adress = app(UpdateAdressAction::class)->run($request);
        return $this->transform($adress, AdressTransformer::class);
    }

    public function deleteAdress(DeleteAdressRequest $request): JsonResponse
    {
        app(DeleteAdressAction::class)->run($request);
        return $this->noContent();
    }
}
