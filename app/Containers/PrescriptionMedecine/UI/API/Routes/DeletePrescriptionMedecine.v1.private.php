<?php

/**
 * @apiGroup           PrescriptionMedecine
 * @apiName            deletePrescriptionMedecine
 *
 * @api                {DELETE} /v1/prescription_medecines/:id Endpoint title here..
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
$router->delete('prescription_medecines/{id}', [
    'as' => 'api_prescriptionmedecine_delete_prescription_medecine',
    'uses'  => 'Controller@deletePrescriptionMedecine',
    'middleware' => [
      'auth:api',
    ],
]);
