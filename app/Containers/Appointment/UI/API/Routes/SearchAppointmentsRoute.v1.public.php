<?php

/**
 * @apiGroup           Appointment
 * @apiName            searchAppointments
 *
 * @api                {GET} /v1/searchappointments Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('searchappointments', [
    'as' => 'api_appointment_search_appointments',
    'uses'  => 'Controller@searchAppointments',
    'middleware' => [
      'auth:api',
    ],
]);
