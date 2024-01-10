<?php

namespace App\Containers\Prescription\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllPrescriptionsAction extends Action
{
    public function run(Request $request)
    {
        $prescriptions = Apiato::call('Prescription@GetAllPrescriptionsTask', [], ['addRequestCriteria']);

        return $prescriptions;
    }
}
