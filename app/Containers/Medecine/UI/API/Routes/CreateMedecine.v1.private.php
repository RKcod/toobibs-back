<?php

/**
 * @apiGroup           Medecine
 * @apiName            createMedecine
 *
 * @api                {POST} /vv1/medecines Endpoint title here..
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
$router->post('medecines', [
    'as' => 'api_medecine_create_medecine',
    'uses'  => 'Controller@createMedecine',
    'middleware' => [
      'auth:api',
    ],
]);
