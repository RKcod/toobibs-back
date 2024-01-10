<?php

namespace App\Containers\CenterType\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllCenterTypesAction extends Action
{
    public function run(Request $request)
    {
        $centertypes = Apiato::call('CenterType@GetAllCenterTypesTask', [], ['addRequestCriteria']);

        return $centertypes;
    }
}
