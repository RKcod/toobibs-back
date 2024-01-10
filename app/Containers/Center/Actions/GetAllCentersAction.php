<?php

namespace App\Containers\Center\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllCentersAction extends Action
{
    public function run(Request $request)
    {
        $centers = Apiato::call('Center@GetAllCentersTask', [], ['addRequestCriteria']);

        return $centers;
    }
}
