<?php

/**
 * @apiGroup           Appointment
 * @apiName            reminder
 *
 * @api                {GET} /v1/reminder Endpoint title here..
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
$router->get('reminder', [
    'as' => 'api_appointment_reminder',
    'uses'  => 'Controller@reminder'
]);
