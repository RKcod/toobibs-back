<?php

/**
 * @apiGroup           Center
 * @apiName            deleteCenter
 *
 * @api                {DELETE} /v1/centers/:id Permet de supprimer un centre de santé
 * @apiDescription     Permet de supprimer un centre de santé
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
$router->delete('centers/{id}', [
    'as' => 'api_center_delete_center',
    'uses'  => 'Controller@deleteCenter',
    'middleware' => [
      'auth:api',
    ],
]);
