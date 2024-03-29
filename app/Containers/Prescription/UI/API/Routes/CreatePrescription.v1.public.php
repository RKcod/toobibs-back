<?php

/**
 * @apiGroup           Prescription
 * @apiName            createPrescription
 *
 * @api                {POST} /v1/prescriptions Endpoint title here..
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
$router->post('prescriptions', [
    'as' => 'api_prescription_create_prescription',
    'uses'  => 'Controller@createPrescription',
    'middleware' => [
      'auth:api',
    ],
]);
