<?php

namespace App\Containers\Appointment\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteAppointmentAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Appointment@DeleteAppointmentTask', [$request->id]);
    }
}
