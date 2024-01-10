<?php

/**
 * @apiGroup           Appointment
 * @apiName            deleteAppointment
 *
 * @api                {DELETE} /v1/appointments/:id Supprimer un rdv
 * @apiDescription     Supprimer un rdv
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
$router->delete('appointments/{id}', [
    'as' => 'api_appointment_delete_appointment',
    'uses'  => 'Controller@deleteAppointment',
    'middleware' => [
      'auth:api',
    ],
]);
