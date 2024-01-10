<?php

/**
 * @apiGroup           Availability
 * @apiName            updateAvailability
 *
 * @api                {PATCH} /v1/availabilities/:id Mettre à jour une disponibilité
 * @apiDescription     Mettre à jour une disponibilité
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {integer}  id
 * @apiParam           {date}  date
 * @apiParam           {time}  start_time
 * @apiParam           {time}  end_time
 * @apiParam           {String}  description
 * @apiParam           {integer}  users_id
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->patch('availabilities/{id}', [
    'as' => 'api_availability_update_availability',
    'uses'  => 'Controller@updateAvailability',
    'middleware' => [
      'auth:api',
    ],
]);
