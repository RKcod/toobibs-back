<?php

namespace App\Containers\UserMeta\UI\API\Controllers;

use App\Containers\UserMeta\UI\API\Requests\CreateUserMetaRequest;
use App\Containers\UserMeta\UI\API\Requests\DeleteUserMetaRequest;
use App\Containers\UserMeta\UI\API\Requests\GetAllUserMetasRequest;
use App\Containers\UserMeta\UI\API\Requests\FindUserMetaByIdRequest;
use App\Containers\UserMeta\UI\API\Requests\UpdateUserMetaRequest;
use App\Containers\UserMeta\UI\API\Transformers\UserMetaTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\UserMeta\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateUserMetaRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createUserMeta(CreateUserMetaRequest $request)
    {
        $usermeta = Apiato::call('UserMeta@CreateUserMetaAction', [$request]);

        return $this->created($this->transform($usermeta, UserMetaTransformer::class));
    }

    /**
     * @param FindUserMetaByIdRequest $request
     * @return array
     */
    public function findUserMetaById(FindUserMetaByIdRequest $request)
    {
        $usermeta = Apiato::call('UserMeta@FindUserMetaByIdAction', [$request]);

        return $this->transform($usermeta, UserMetaTransformer::class);
    }

    /**
     * @param GetAllUserMetasRequest $request
     * @return array
     */
    public function getAllUserMetas(GetAllUserMetasRequest $request)
    {
        $usermetas = Apiato::call('UserMeta@GetAllUserMetasAction', [$request]);

        return $this->transform($usermetas, UserMetaTransformer::class);
    }

    /**
     * @param UpdateUserMetaRequest $request
     * @return array
     */
    public function updateUserMeta(UpdateUserMetaRequest $request)
    {
        $usermeta = Apiato::call('UserMeta@UpdateUserMetaAction', [$request]);

        return $this->transform($usermeta, UserMetaTransformer::class);
    }

    /**
     * @param DeleteUserMetaRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteUserMeta(DeleteUserMetaRequest $request)
    {
        Apiato::call('UserMeta@DeleteUserMetaAction', [$request]);

        return $this->noContent();
    }
}
