<?php

/**
 * @apiGroup           Call
 * @apiName            updateCall
 *
 * @api                {PATCH} /v1/calls/:id Permet de modifier un appel
 * @apiDescription     Permet de modifier un appel
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->patch('calls/{id}', [
    'as' => 'api_call_update_call',
    'uses'  => 'Controller@updateCall',
    'middleware' => [
      'auth:api',
    ],
]);
