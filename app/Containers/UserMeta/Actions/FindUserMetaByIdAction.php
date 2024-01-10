<?php

namespace App\Containers\UserMeta\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindUserMetaByIdAction extends Action
{
    public function run(Request $request)
    {
        $usermeta = Apiato::call('UserMeta@FindUserMetaByIdTask', [$request->id]);

        return $usermeta;
    }
}
