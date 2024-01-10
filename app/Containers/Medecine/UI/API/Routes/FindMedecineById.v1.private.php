<?php

/**
 * @apiGroup           Medecine
 * @apiName            findMedecineById
 *
 * @api                {GET} /vv1/medecines/:id Endpoint title here..
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
$router->get('medecines/{id}', [
    'as' => 'api_medecine_find_medecine_by_id',
    'uses'  => 'Controller@findMedecineById',
    'middleware' => [
      'auth:api',
    ],
]);
