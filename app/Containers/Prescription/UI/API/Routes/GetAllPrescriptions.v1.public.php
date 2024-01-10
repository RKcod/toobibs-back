<?php

/**
 * @apiGroup           Prescription
 * @apiName            getAllPrescriptions
 *
 * @api                {GET} /v1/prescriptions Endpoint title here..
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
$router->get('prescriptions', [
    'as' => 'api_prescription_get_all_prescriptions',
    'uses'  => 'Controller@getAllPrescriptions',
   // 'middleware' => [
  //    'auth:api',
//    ],
]);
