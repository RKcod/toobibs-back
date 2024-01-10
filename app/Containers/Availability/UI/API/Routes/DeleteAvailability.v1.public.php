<?php

/**
 * @apiGroup           Availability
 * @apiName            deleteAvailability
 *
 * @api                {DELETE} /v1/availabilities/:id Supprime une disponibilité
 * @apiDescription     Supprime une disponibilité
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
$router->delete('availabilities/{id}', [
    'as' => 'api_availability_delete_availability',
    'uses'  => 'Controller@deleteAvailability',
    'middleware'=>[
	'auth:api',
	]
]);
