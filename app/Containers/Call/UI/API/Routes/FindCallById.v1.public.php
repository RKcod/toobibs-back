<?php

/**
 * @apiGroup           Call
 * @apiName            findCallById
 *
 * @api                {GET} /v1/calls/:id Permet de récuperer un appel
 * @apiDescription     Permet de récuperer un appel
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
$router->get('calls/{id}', [
    'as' => 'api_call_find_call_by_id',
    'uses'  => 'Controller@findCallById',
    'middleware' => [
      'auth:api',
    ],
]);
