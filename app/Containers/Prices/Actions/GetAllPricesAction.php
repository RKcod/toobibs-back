<?php

namespace App\Containers\Prices\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllPricesAction extends Action
{
    public function run(Request $request)
    {
        $prices = Apiato::call('Prices@GetAllPricesTask', [], ['addRequestCriteria']);

        return $prices;
    }
}
