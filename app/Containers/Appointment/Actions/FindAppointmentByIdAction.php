<?php

namespace App\Containers\Appointment\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindAppointmentByIdAction extends Action
{
    public function run(Request $request)
    {
        $appointment = Apiato::call('Appointment@FindAppointmentByIdTask', [$request->id]);

        return $appointment;
    }
}
