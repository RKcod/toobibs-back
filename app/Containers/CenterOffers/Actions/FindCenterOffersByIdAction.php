<?php

namespace App\Containers\CenterOffers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCenterOffersByIdAction extends Action
{
    public function run(Request $request)
    {
        $centeroffers = Apiato::call('CenterOffers@FindCenterOffersByIdTask', [$request->id]);

        return $centeroffers;
    }
}
