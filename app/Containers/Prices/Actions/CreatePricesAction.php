<?php

namespace App\Containers\Prices\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreatePricesAction extends Action
{
    public function run(Request $request)
    {
        $data = [
          'price_cabinet_consultation' => $request->price_cabinet_consultation,
          'price_teleconsultation' => $request->price_teleconsultation,
          'price_house_consultation' => $request->price_house_consultation,
          'currency' => $request->currency,
          'doctor_id' => $request->centers_id,
          'fees' => $request->centers_id,
          'fees_type' => $request->centers_id,
          'profile_type' => $request->centers_id,
        ];


        $prices = Apiato::call('Prices@CreatePricesTask', [$data]);

        return $prices;
    }
}
