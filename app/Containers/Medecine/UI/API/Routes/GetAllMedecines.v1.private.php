<?php

/**
 * @apiGroup           Medecine
 * @apiName            getAllMedecines
 *
 * @api                {GET} /vv1/medecines Endpoint title here..
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
$router->get('medecines', [
    'as' => 'api_medecine_get_all_medecines',
    'uses'  => 'Controller@getAllMedecines',
    'middleware' => [
      'auth:api',
    ],
]);
