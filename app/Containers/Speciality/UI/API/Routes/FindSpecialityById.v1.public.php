<?php

/**
 * @apiGroup           Speciality
 * @apiName            findSpecialityById
 *
 * @api                {GET} /v1/specialities/:id Permet de récuperer une spécialitée médicale
 * @apiDescription     Permet de récuperer une spécialitée médicale
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
$router->get('specialities/{id}', [
    'as' => 'api_speciality_find_speciality_by_id',
    'uses'  => 'Controller@findSpecialityById',
]);
