<?php

namespace App\Containers\CenterType\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCenterTypeByIdAction extends Action
{
    public function run(Request $request)
    {
        $centertype = Apiato::call('CenterType@FindCenterTypeByIdTask', [$request->id]);

        return $centertype;
    }
}
