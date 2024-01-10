<?php

/**
 * @apiGroup           Speciality
 * @apiName            getSpecialityAuth
 *
 * @api                {GET} /v1/getspecialities Endpoint title here..
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
$router->get('getspecialities', [
    'as' => 'api_speciality_get_speciality_auth',
    'uses'  => 'Controller@getSpecialityAuth',
    'middleware' => [
      'auth:api',
    ],
]);
