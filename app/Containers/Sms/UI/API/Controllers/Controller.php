<?php

namespace App\Containers\Sms\UI\API\Controllers;

use App\Containers\Sms\UI\API\Requests\CreateSmsRequest;
use App\Containers\Sms\UI\API\Requests\DeleteSmsRequest;
use App\Containers\Sms\UI\API\Requests\GetAllSmsRequest;
use App\Containers\Sms\UI\API\Requests\FindSmsByIdRequest;
use App\Containers\Sms\UI\API\Requests\UpdateSmsRequest;
use App\Containers\Sms\UI\API\Transformers\SmsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Sms\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateSmsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSms(CreateSmsRequest $request)
    {
        $sms = Apiato::call('Sms@CreateSmsAction', [$request]);

        return $this->created($this->transform($sms, SmsTransformer::class));
    }

    /**
     * @param FindSmsByIdRequest $request
     * @return array
     */
    public function findSmsById(FindSmsByIdRequest $request)
    {
        $sms = Apiato::call('Sms@FindSmsByIdAction', [$request]);

        return $this->transform($sms, SmsTransformer::class);
    }

    /**
     * @param GetAllSmsRequest $request
     * @return array
     */
    public function getAllSms(GetAllSmsRequest $request)
    {
        $sms = Apiato::call('Sms@GetAllSmsAction', [$request]);

        return $this->transform($sms, SmsTransformer::class);
    }

    /**
     * @param UpdateSmsRequest $request
     * @return array
     */
    public function updateSms(UpdateSmsRequest $request)
    {
        $sms = Apiato::call('Sms@UpdateSmsAction', [$request]);

        return $this->transform($sms, SmsTransformer::class);
    }

    /**
     * @param DeleteSmsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSms(DeleteSmsRequest $request)
    {
        Apiato::call('Sms@DeleteSmsAction', [$request]);

        return $this->noContent();
    }
}
