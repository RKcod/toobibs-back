<?php

/**
 * @apiGroup           Adress
 * @apiName            createAdress
 *
 * @api                {POST} /v1/adresses Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\AppSection\Adress\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('adresses', [Controller::class, 'createAdress'])
    ->name('api_adress_create_adress')
    ->middleware(['auth:api']);

