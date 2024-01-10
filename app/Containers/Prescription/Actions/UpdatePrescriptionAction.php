<?php

namespace App\Containers\Prescription\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdatePrescriptionAction extends Action
{
    public function run(Request $request)
    {
        $data = [
            // add your request data here
        ];

        $prescription = Apiato::call('Prescription@UpdatePrescriptionTask', [$request->id, $data]);

        return $prescription;
    }
}
