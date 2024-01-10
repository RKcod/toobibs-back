<?php

/**
 * @apiGroup           Prescription
 * @apiName            findPrescriptionById
 *
 * @api                {GET} /v1/prescriptions/:id Endpoint title here..
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
$router->get('prescriptions/{id}', [
    'as' => 'api_prescription_find_prescription_by_id',
    'uses'  => 'Controller@findPrescriptionById',
    //'middleware' => [
    //  'auth:api',
  //  ],
]);
