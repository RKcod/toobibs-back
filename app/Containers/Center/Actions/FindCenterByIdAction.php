<?php

namespace App\Containers\Center\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCenterByIdAction extends Action
{
    public function run(Request $request)
    {
        $center = Apiato::call('Center@FindCenterByIdTask', [$request->id]);

        return $center;
    }
}
