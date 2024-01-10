<?php

namespace App\Containers\Prices\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdatePricesAction extends Action
{
  public function run(Request $request)
  {
    $data = [
      'price_cabinet_consultation' => $request->price_cabinet_consultation,
      'price_teleconsultation' => $request->price_teleconsultation,
      'price_house_consultation' => $request->price_house_consultation,
      'currency' => $request->currency,
      'fees' => $request->fees,
      'fees_type' => $request->fees_type,
    ];
    //print_r($data);
    //print_r($request->fees);
    $data = array_filter($data);

    $prices = Apiato::call('Prices@UpdatePricesTask', [$request->id, $data]);

    return $prices;
  }
}
