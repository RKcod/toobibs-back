
<?php

/**
 * @apiGroup           PrescriptionMedecine
 * @apiName            findPrescriptionMedecineById
 *
 * @api                {GET} /v1/prescription_medecines/:id Endpoint title here..
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
$router->get('prescription_medecines/{id}', [
    'as' => 'api_prescriptionmedecine_find_prescription_medecine_by_id',
    'uses'  => 'Controller@findPrescriptionMedecineById',
    'middleware' => [
      'auth:api',
    ],
]);
