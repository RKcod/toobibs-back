<?php

/**
 * @apiGroup           Prescription
 * @apiName            deletePrescription
 *
 * @api                {DELETE} /v1/prescriptions/:id Endpoint title here..
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
$router->delete('prescriptions/{id}', [
    'as' => 'api_prescription_delete_prescription',
    'uses'  => 'Controller@deletePrescription',
    'middleware' => [
      'auth:api',
    ],
]);
