<?php

namespace App\Containers\Prescription\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeletePrescriptionAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Prescription@DeletePrescriptionTask', [$request->id]);
    }
}
