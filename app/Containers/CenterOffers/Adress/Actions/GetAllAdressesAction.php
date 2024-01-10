<?php

namespace App\Containers\AppSection\Adress\Actions;

use App\Containers\AppSection\Adress\Tasks\GetAllAdressesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllAdressesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllAdressesTask::class)->addRequestCriteria()->run();
    }
}
