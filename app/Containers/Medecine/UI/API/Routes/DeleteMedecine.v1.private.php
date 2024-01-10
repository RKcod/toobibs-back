<?php

/**
 * @apiGroup           Medecine
 * @apiName            deleteMedecine
 *
 * @api                {DELETE} /vv1/medecines/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         v1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->delete('medecines/{id}', [
    'as' => 'api_medecine_delete_medecine',
    'uses'  => 'Controller@deleteMedecine',
    'middleware' => [
      'auth:api',
    ],
]);
