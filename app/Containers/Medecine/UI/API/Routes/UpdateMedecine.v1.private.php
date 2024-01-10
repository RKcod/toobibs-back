<?php

/**
 * @apiGroup           Medecine
 * @apiName            updateMedecine
 *
 * @api                {PATCH} /vv1/medecines/:id Endpoint title here..
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
$router->patch('medecines/{id}', [
    'as' => 'api_medecine_update_medecine',
    'uses'  => 'Controller@updateMedecine',
    'middleware' => [
      'auth:api',
    ],
]);
