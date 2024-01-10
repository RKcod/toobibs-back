<?php

namespace App\Containers\CenterOffers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteCenterOffersAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('CenterOffers@DeleteCenterOffersTask', [$request->id]);
    }
}
