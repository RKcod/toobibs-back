<?php

namespace App\Containers\PrescriptionMedecine\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeletePrescriptionMedecineAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('PrescriptionMedecine@DeletePrescriptionMedecineTask', [$request->id]);
    }
}
