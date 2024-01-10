<?php

namespace App\Containers\AppSection\Adress\Actions;

use App\Containers\AppSection\Adress\Tasks\DeleteAdressTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteAdressAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteAdressTask::class)->run($request->id);
    }
}
