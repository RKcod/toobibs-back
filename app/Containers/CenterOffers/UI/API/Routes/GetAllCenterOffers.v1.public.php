<?php

/**
 * @apiGroup           CenterOffers
 * @apiName            getAllCenterOffers
 *
 * @api                {GET} /v1/centeroffers Permet de récuperer toutes les offres
 * @apiDescription     Permet de récuperer toutes les offres
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
$router->get('centeroffers', [
    'as' => 'api_centeroffers_get_all_center_offers',
    'uses'  => 'Controller@getAllCenterOffers',
    'middleware' => [
      'auth:api',
    ],
]);
