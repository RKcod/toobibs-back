<?php

/**
 * @apiGroup           Appointment
 * @apiName            findAppointmentById
 *
 * @api                {GET} /v1/appointments/:id Récupere un rdv
 * @apiDescription     Récupere un rdv
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
$router->get('appointments/{id}', [
    'as' => 'api_appointment_find_appointment_by_id',
    'uses'  => 'Controller@findAppointmentById',
    'middleware' => [
      'auth:api',
    ],
]);
