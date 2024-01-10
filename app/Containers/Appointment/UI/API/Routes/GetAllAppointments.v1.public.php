<?php

/**
 * @apiGroup           Appointment
 * @apiName            getAllAppointments
 *
 * @api                {GET} /v1/appointments Recuperer tous les rdv
 * @apiDescription     Recuperer tous les rdv
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
$router->get('appointments', [
    'as' => 'api_appointment_get_all_appointments',
    'uses'  => 'Controller@getAllAppointments',
    'middleware' => [
      'auth:api',
    ],
]);
