<?php

/**
 * @apiGroup           Speciality
 * @apiName            getAllSpecialities
 *
 * @api                {GET} /v1/specialities Permet de récuperer toutes les spécialitées médicale
 * @apiDescription     Permet de récuperer toutes les spécialitées médicale
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('specialities', [
    'as' => 'api_speciality_get_all_specialities',
    'uses'  => 'Controller@getAllSpecialities',
]);
