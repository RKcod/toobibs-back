<?php

/**
 * @apiGroup           PrescriptionMedecine
 * @apiName            getAllPrescriptionMedecines
 *
 * @api                {GET} /v1/prescription_medecines Endpoint title here..
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
$router->get('prescription_medecines', [
    'as' => 'api_prescriptionmedecine_get_all_prescription_medecines',
    'uses'  => 'Controller@getAllPrescriptionMedecines',
    'middleware' => [
      'auth:api',
    ],
]);
