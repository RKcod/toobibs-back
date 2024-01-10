<?php

/**
 * @apiGroup           Availability
 * @apiName            getAllAvailabilities
 *
 * @api                {GET} /v1/availabilities Retourne toutes les disponibilités
 * @apiDescription     Retourne toutes les disponibilités
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
$router->get('availabilities', [
    'as' => 'api_availability_get_all_availabilities',
    'uses'  => 'Controller@getAllAvailabilities',
    'middleware' => [
      'auth:api',
    ],
]);
