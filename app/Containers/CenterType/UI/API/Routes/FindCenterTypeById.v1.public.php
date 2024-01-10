<?php

/**
 * @apiGroup           CenterType
 * @apiName            findCenterTypeById
 *
 * @api                {GET} /v1/centertypes/:id Permet de recupérer un type de centre avec son id
 * @apiDescription     Permet de recupérer un type de centre avec son id
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
$router->get('centertypes/{id}', [
    'as' => 'api_centertype_find_center_type_by_id',
    'uses'  => 'Controller@findCenterTypeById',
    'middleware' => [
      'auth:api',
    ],
]);
