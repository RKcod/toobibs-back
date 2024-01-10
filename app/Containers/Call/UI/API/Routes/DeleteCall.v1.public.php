<?php

/**
 * @apiGroup           Call
 * @apiName            deleteCall
 *
 * @api                {DELETE} /v1/calls/:id Permet de supprimer un appel
 * @apiDescription     Permet de supprimer un appel
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
$router->delete('calls/{id}', [
    'as' => 'api_call_delete_call',
    'uses'  => 'Controller@deleteCall',
    'middleware' => [
      'auth:api',
    ],
]);
