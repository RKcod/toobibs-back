<?php

/**
 * @apiGroup           CenterType
 * @apiName            createCenterType
 *
 * @api                {POST} /v1/centertypes Permet de créer un type de centre
 * @apiDescription     Cet endpoint vous permet de créer un type de centre
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
$router->post('centertypes', [
    'as' => 'api_centertype_create_center_type',
    'uses'  => 'Controller@createCenterType',
    'middleware' => [
      'auth:api',
    ],
]);
