<?php

namespace App\Containers\Speciality\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllSpecialitiesAction extends Action
{
    public function run(Request $request)
    {
        $specialities = Apiato::call('Speciality@GetAllSpecialitiesTask', [], ['addRequestCriteria']);

        return $specialities;
    }
}
