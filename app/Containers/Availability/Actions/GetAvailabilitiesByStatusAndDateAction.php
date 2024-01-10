<?php

namespace App\Containers\Availability\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

class GetAvailabilitiesByStatusAndDateAction extends Action
{
    public function run(Request $request)
    {
        // $var = Apiato::call('Container@Task', [$arg1, $arg2, ...]);

      $availabilities = Apiato::call('Availability@GetAvailabilitiesByStatusAndDateTask', [$request->date, $request->status]);

      return $availabilities;
    }
}
