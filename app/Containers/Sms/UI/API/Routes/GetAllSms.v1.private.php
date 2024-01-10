<?php

/**
 * @apiGroup           Sms
 * @apiName            getAllSms
 *
 * @api                {GET} /v1/sms Endpoint title here..
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
$router->get('sms', [
    'as' => 'api_sms_get_all_sms',
    'uses'  => 'Controller@getAllSms',
    'middleware' => [
      'auth:api',
    ],
]);
