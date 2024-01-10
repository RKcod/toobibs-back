<?php

/**
 * @apiGroup           Call
 * @apiName            getAllCalls
 *
 * @api                {GET} /v1/calls Permet de récuperer tous les appels
 * @apiDescription     Permet de récuperer tous les appels
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('calls', [
    'as' => 'api_call_get_all_calls',
    'uses'  => 'Controller@getAllCalls',
    'middleware' => [
      'auth:api',
    ],
]);
