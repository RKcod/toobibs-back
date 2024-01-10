<?php

/**
 * @apiGroup           Center
 * @apiName            getAllCenters
 *
 * @api                {GET} /v1/centers Permet de récuperer tous les centres de santés
 * @apiDescription     Permet de récuperer tous les centres de santés
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
$router->get('centers', [
    'as' => 'api_center_get_all_centers',
    'uses'  => 'Controller@getAllCenters',
]);
