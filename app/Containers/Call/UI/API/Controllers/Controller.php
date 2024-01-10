<?php

namespace App\Containers\Call\UI\API\Controllers;

use App\Containers\Call\UI\API\Requests\CreateCallRequest;
use App\Containers\Call\UI\API\Requests\DeleteCallRequest;
use App\Containers\Call\UI\API\Requests\GetAllCallsRequest;
use App\Containers\Call\UI\API\Requests\FindCallByIdRequest;
use App\Containers\Call\UI\API\Requests\UpdateCallRequest;
use App\Containers\Call\UI\API\Transformers\CallTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Call\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateCallRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCall(CreateCallRequest $request)
    {
        $call = Apiato::call('Call@CreateCallAction', [$request]);

        return $this->created($this->transform($call, CallTransformer::class));
    }

    /**
     * @param FindCallByIdRequest $request
     * @return array
     */
    public function findCallById(FindCallByIdRequest $request)
    {
        $call = Apiato::call('Call@FindCallByIdAction', [$request]);

        return $this->transform($call, CallTransformer::class);
    }

    /**
     * @param GetAllCallsRequest $request
     * @return array
     */
    public function getAllCalls(GetAllCallsRequest $request)
    {
        $calls = Apiato::call('Call@GetAllCallsAction', [$request]);

        return $this->transform($calls, CallTransformer::class);
    }

    /**
     * @param UpdateCallRequest $request
     * @return array
     */
    public function updateCall(UpdateCallRequest $request)
    {
        $call = Apiato::call('Call@UpdateCallAction', [$request]);

        return $this->transform($call, CallTransformer::class);
    }

    /**
     * @param DeleteCallRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCall(DeleteCallRequest $request)
    {
        Apiato::call('Call@DeleteCallAction', [$request]);

        return $this->noContent();
    }
}
