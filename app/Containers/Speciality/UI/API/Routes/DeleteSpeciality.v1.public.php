<?php

/**
 * @apiGroup           Speciality
 * @apiName            deleteSpeciality
 *
 * @api                {DELETE} /v1/specialities/:id Permet de supprimer une spécialitée médicale
 * @apiDescription     Permet de supprimer une spécialitée médicale
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->delete('specialities/{id}', [
    'as' => 'api_speciality_delete_speciality',
    'uses'  => 'Controller@deleteSpeciality',
    'middleware' => [
      'auth:api',
    ],
]);
