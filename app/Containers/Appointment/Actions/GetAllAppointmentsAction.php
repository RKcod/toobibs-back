<?php

namespace App\Containers\Appointment\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllAppointmentsAction extends Action
{
    public function run(Request $request)
    {
        $appointments = Apiato::call('Appointment@GetAllAppointmentsTask', [], ['addRequestCriteria']);

        return $appointments;
    }
}
