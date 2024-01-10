<?php

namespace App\Containers\UserMeta\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteUserMetaAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('UserMeta@DeleteUserMetaTask', [$request->id]);
    }
}
