<?php

/**
 * @apiGroup           Center
 * @apiName            updateCenter
 *
 * @api                {PATCH} /v1/centers/:id Permet de modifier un centre de santé
 * @apiDescription     Permet de modifier un centre de santé
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
$router->patch('centers/{id}', [
    'as' => 'api_center_update_center',
    'uses'  => 'Controller@updateCenter',
    'middleware' => [
      'auth:api',
    ],
]);
