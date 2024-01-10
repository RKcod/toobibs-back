<?php

/**
 * @apiGroup           Center
 * @apiName            findCenterById
 *
 * @api                {GET} /v1/centers/:id Permet de récuperer un centre de santé
 * @apiDescription     Permet de récuperer un centre de santé
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
$router->get('centers/{id}', [
    'as' => 'api_center_find_center_by_id',
    'uses'  => 'Controller@findCenterById',
    'middleware' => [
      'auth:api',
    ],
]);
