<?php

/**
 * @apiGroup           Sms
 * @apiName            deleteSms
 *
 * @api                {DELETE} /v1/sms/:id Endpoint title here..
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

/** @var Route $router */
$router->delete('sms/{id}', [
    'as' => 'api_sms_delete_sms',
    'uses'  => 'Controller@deleteSms',
    'middleware' => [
      'auth:api',
    ],
]);
