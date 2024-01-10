<?php

/**
 * @apiGroup           CenterType
 * @apiName            updateCenterType
 *
 * @api                {PATCH} /v1/centertypes/:id Mise à jour d'un type de centre
 * @apiDescription     Mise à jour d'un type de centre
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  name
 * @apiParam           {String}  description
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->patch('centertypes/{id}', [
    'as' => 'api_centertype_update_center_type',
    'uses'  => 'Controller@updateCenterType',
    'middleware' => [
      'auth:api',
    ],
]);
