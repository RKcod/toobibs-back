<?php

namespace App\Containers\UserMeta\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllUserMetasAction extends Action
{
    public function run(Request $request)
    {
        $usermetas = Apiato::call('UserMeta@GetAllUserMetasTask', [], ['addRequestCriteria']);

        return $usermetas;
    }
}
