<?php

namespace App\Containers\Medecine\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteMedecineAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Medecine@DeleteMedecineTask', [$request->id]);
    }
}
