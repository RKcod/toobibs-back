<?php

namespace App\Containers\Call\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteCallAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Call@DeleteCallTask', [$request->id]);
    }
}
