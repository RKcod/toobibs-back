<?php

namespace App\Containers\AppSection\Adress\Actions;

use App\Containers\AppSection\Adress\Models\Adress;
use App\Containers\AppSection\Adress\Tasks\UpdateAdressTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateAdressAction extends Action
{
    public function run(Request $request): Adress
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateAdressTask::class)->run($request->id, $data);
    }
}
