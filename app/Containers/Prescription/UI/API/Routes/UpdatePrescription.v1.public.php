<?php

/**
 * @apiGroup           Prescription
 * @apiName            updatePrescription
 *
 * @api                {PATCH} /v1/prescriptions/:id Endpoint title here..
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
$router->patch('prescriptions/{id}', [
    'as' => 'api_prescription_update_prescription',
    'uses'  => 'Controller@updatePrescription',
    'middleware' => [
      'auth:api',
    ],
]);
