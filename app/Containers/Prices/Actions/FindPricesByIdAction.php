<?php

namespace App\Containers\Prices\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindPricesByIdAction extends Action
{
    public function run(Request $request)
    {
        $prices = Apiato::call('Prices@FindPricesByIdTask', [$request->id]);

        return $prices;
    }
}
