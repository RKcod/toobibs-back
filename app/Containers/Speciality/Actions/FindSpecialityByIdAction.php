<?php

namespace App\Containers\Speciality\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindSpecialityByIdAction extends Action
{
    public function run(Request $request)
    {
        $speciality = Apiato::call('Speciality@FindSpecialityByIdTask', [$request->id]);

        return $speciality;
    }
}
