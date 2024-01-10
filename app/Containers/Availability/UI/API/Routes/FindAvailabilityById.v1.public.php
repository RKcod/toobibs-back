<?php

/**
 * @apiGroup           Availability
 * @apiName            findAvailabilityById
 *
 * @api                {GET} /v1/availabilities/:id Récupere une disponibilité
 * @apiDescription     Récupere une disponibilité
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {integer}  id
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('availabilities/{id}', [
    'as' => 'api_availability_find_availability_by_id',
    'uses'  => 'Controller@findAvailabilityById',
    'middleware' => [
      'auth:api',
    ],
]);
