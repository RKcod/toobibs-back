<?php

namespace App\Containers\Availability\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindAvailabilityByIdAction extends Action
{
    public function run(Request $request)
    {
        $availability = Apiato::call('Availability@FindAvailabilityByIdTask', [$request->id]);

        return $availability;
    }
}
