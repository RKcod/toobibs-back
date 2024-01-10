<?php

/**
 * @apiGroup           Center
 * @apiName            createCenter
 *
 * @api                {POST} /v1/centers Permet de créer un centre de santé
 * @apiDescription     Permet de créer un centre de santé
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  name
 * @apiParam           {String}  address
 * @apiParam           {String}  email
 * @apiParam           {String}  phone
 * @apiParam           {String}  lat
 * @apiParam           {String}  lng
 * @apiParam           {String}  center_type_id
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('centers', [
    'as' => 'api_center_create_center',
    'uses'  => 'Controller@createCenter',
    'middleware' => [
      'auth:api',
    ],
]);
