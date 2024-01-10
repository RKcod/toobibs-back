<?php

/**
 * @apiGroup           Sms
 * @apiName            createSms
 *
 * @api                {POST} /v1/sms Endpoint title here..
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
$router->post('sms', [
    'as' => 'api_sms_create_sms',
    'uses'  => 'Controller@createSms',
    'middleware' => [
      'auth:api',
    ],
]);
