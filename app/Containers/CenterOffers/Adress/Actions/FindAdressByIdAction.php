<?php

namespace App\Containers\AppSection\Adress\Actions;

use App\Containers\AppSection\Adress\Models\Adress;
use App\Containers\AppSection\Adress\Tasks\FindAdressByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindAdressByIdAction extends Action
{
    public function run(Request $request): Adress
    {
        return app(FindAdressByIdTask::class)->run($request->id);
    }
}
