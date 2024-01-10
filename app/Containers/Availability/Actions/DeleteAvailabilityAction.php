<?php

namespace App\Containers\Availability\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteAvailabilityAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Availability@DeleteAvailabilityTask', ["id", $request->id]);
    }
}
