<?php

/**
 * @apiGroup           Speciality
 * @apiName            createSpeciality
 *
 * @api                {POST} /v1/specialities Permet de créer une spécialitée médicale
 * @apiDescription     Permet de créer une spécialitée médicale
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  name
 * @apiParam           {String}  description
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('specialities', [
    'as' => 'api_speciality_create_speciality',
    'uses'  => 'Controller@createSpeciality',
    'middleware' => [
      'auth:api',
    ],
]);
