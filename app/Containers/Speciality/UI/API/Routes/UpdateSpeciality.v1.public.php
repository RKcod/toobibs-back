<?php

/**
 * @apiGroup           Speciality
 * @apiName            updateSpeciality
 *
 * @api                {PATCH} /v1/specialities/:id Permet de modifier une spécialitée médicale
 * @apiDescription     Permet de modifier une spécialitée médicale
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {integer}  id
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->patch('specialities/{id}', [
    'as' => 'api_speciality_update_speciality',
    'uses'  => 'Controller@updateSpeciality',
    'middleware' => [
      'auth:api',
    ],
]);
