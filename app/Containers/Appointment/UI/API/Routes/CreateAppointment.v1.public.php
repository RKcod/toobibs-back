<?php

/**
 * @apiGroup           Appointment
 * @apiName            createAppointment
 *
 * @api                {POST} /v1/appointments Créer un rdv
 * @apiDescription     Créer un rdv
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {integer}  users_id
 * @apiParam           {integer}  doctor_id
 * @apiParam           {date}  date
 * @apiParam           {time}  time
 * @apiParam           {String}  motif
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('appointments', [
    'as' => 'api_appointment_create_appointment',
    'uses'  => 'Controller@createAppointment',
    'middleware' => [
      'auth:api',
    ],
]);
