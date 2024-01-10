<?php

/**
 * @apiGroup           Availability
 * @apiName            getAllAvailabilitiesByStatusAndDate
 *
 * @api                {GET} /v1/availabilities/status Endpoint title here..
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
$router->get('availabilities/status/date', [
    'as' => 'api_availability_get_all_availabilities_by_status_and_date',
    'uses'  => 'Controller@getAllAvailabilitiesByStatusAndDate',
]);
