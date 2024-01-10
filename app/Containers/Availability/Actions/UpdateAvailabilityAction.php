<?php

namespace App\Containers\Availability\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateAvailabilityAction extends Action
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

        $availability = Apiato::call('Availability@UpdateAvailabilityTask', [$request->id, $data]);

        return $availability;
    }
}
