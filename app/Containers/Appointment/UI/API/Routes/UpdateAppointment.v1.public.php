<?php

/**
 * @apiGroup           Appointment
 * @apiName            updateAppointment
 *
 * @api                {PATCH} /v1/appointments/:id Modifier un rdv
 * @apiDescription     Modifier un rdv
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {integer}  id
 * @apiParam           {integer}  users_id
 * @apiParam           {integer}  doctor_id
 * @apiParam           {date}  date
 * @apiParam           {time}  time
 * @apiParam           {String}  motif
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->patch('appointments/{id}', [
    'as' => 'api_appointment_update_appointment',
    'uses'  => 'Controller@updateAppointment',
    'middleware' => [
      'auth:api',
    ],
]);
