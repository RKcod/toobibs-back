<?php

namespace App\Containers\Availability\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllAvailabilitiesAction extends Action
{
    public function run(Request $request)
    {
        $availabilities = Apiato::call('Availability@GetAllAvailabilitiesTask', [], ['addRequestCriteria']);

        return $availabilities;
    }
}
