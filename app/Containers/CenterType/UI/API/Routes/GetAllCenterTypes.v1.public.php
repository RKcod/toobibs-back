<?php

/**
 * @apiGroup           CenterType
 * @apiName            getAllCenterTypes
 *
 * @api                {GET} /v1/centertypes Permet de recupérer tous les types de centres
 * @apiDescription     Permet de recupérer tous les types de centres
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('centertypes', [
    'as' => 'api_centertype_get_all_center_types',
    'uses'  => 'Controller@getAllCenterTypes',
    'middleware' => [
      'auth:api',
    ],
]);
