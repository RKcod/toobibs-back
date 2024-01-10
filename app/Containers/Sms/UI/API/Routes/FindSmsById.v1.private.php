<?php

/**
 * @apiGroup           Sms
 * @apiName            findSmsById
 *
 * @api                {GET} /v1/sms/:id Endpoint title here..
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
$router->get('sms/{id}', [
    'as' => 'api_sms_find_sms_by_id',
    'uses'  => 'Controller@findSmsById',
    'middleware' => [
      'auth:api',
    ],
]);
