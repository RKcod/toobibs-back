<?php

/**
 * @apiGroup           Availability
 * @apiName            createAvailability
 *
 * @api                {POST} /v1/availabilities Créer une disponibilité
 * @apiDescription     Créer une disponibilité
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
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
$router->post('availabilities', [
    'as' => 'api_availability_create_availability',
    'uses'  => 'Controller@createAvailability',
    'middleware' => [
      'auth:api',
    ],
]);
