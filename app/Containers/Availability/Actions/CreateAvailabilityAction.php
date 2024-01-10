<?php

namespace App\Containers\Availability\Actions;

use App\Containers\Availability\Models\Availability;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateAvailabilityAction extends Action
{
  public function run(Request $request)
  {
    $data = [
      'date' => $request->date,
      'start_time' => $request->start_time,
      'end_time' => $request->end_time,
      'description' => $request->description,
      'users_id' => $request->users_id,
    ];
    $data = array_filter($data);
    //print_r($request->times);

    $exist = Apiato::call('Availability@FindAvailabilityByDateTask', [$request->date]);
    if($exist != null){
      Apiato::call('Availability@DeleteAvailabilityTask', ["date", $request->date]);
      //$availability = Apiato::call('Availability@CreateAvailabilityTask', [$data]);
    }
    else {
      Apiato::call('Availability@DeleteAvailabilityTask', ["date", $request->date]);
      //echo($exist);
      //$availability = Apiato::call('Availability@UpdateAvailabilityTask', [$exist->id, $data]);
    }

    $availability = null;
    foreach ($request->times as $t){
      $av = new Availability();
      $av->setAttribute("date", $request->date);
      $av->setAttribute("start_time", $t["hour"].":".$t["minute"]);
      $av->setAttribute("end_time", null);
      $av->setAttribute("description", "");
      $av->setAttribute("users_id", $request->users_id);
      $av->save();
      $availability = $av;
    }


    return $availability;
  }
}
