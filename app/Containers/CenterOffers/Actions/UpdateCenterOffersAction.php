<?php

namespace App\Containers\CenterOffers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateCenterOffersAction extends Action
{
  public function run(Request $request)
  {
    $data = [
      // add your request data here
      'title' => $request->title,
      'description' => $request->description,
      'image' => $request->image,
      'center_id' => $request->center_id,
    ];
    // remove null values and their keys
    $data = array_filter($data);

    $centeroffers = Apiato::call('CenterOffers@UpdateCenterOffersTask', [$request->id, $data]);

    return $centeroffers;
  }
}
