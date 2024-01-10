<?php

/**
 * @apiGroup           CenterType
 * @apiName            deleteCenterType
 *
 * @api                {DELETE} /v1/centertypes/:id Permet de supprimer un type de centre
 * @apiDescription     Permet de supprimer un type de centre
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
$router->delete('centertypes/{id}', [
    'as' => 'api_centertype_delete_center_type',
    'uses'  => 'Controller@deleteCenterType',
    'middleware' => [
      'auth:api',
    ],
]);
