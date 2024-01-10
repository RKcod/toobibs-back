<?php

namespace App\Containers\Prices\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeletePricesAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Prices@DeletePricesTask', [$request->id]);
    }
}
