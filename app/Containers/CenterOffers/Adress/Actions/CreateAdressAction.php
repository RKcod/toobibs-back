<?php

namespace App\Containers\AppSection\Adress\Actions;

use App\Containers\AppSection\Adress\Models\Adress;
use App\Containers\AppSection\Adress\Tasks\CreateAdressTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateAdressAction extends Action
{
    public function run(Request $request): Adress
    {
        $data = [
            'doctor_id' => $request->doctor_id,
            'address' => $request->address
        ];

        return app(CreateAdressTask::class)->run($data);
    }
}
