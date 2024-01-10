<?php

/**
 * @apiGroup           Adress
 * @apiName            updateAdress
 *
 * @api                {PATCH} /v1/adresses/:id Endpoint title here..
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

Route::patch('adresses/{id}', [Controller::class, 'updateAdress'])
    ->name('api_adress_update_adress')
    ->middleware(['auth:api']);

