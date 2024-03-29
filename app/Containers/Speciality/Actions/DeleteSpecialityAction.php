<?php

namespace App\Containers\Speciality\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteSpecialityAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Speciality@DeleteSpecialityTask', [$request->id]);
    }
}
