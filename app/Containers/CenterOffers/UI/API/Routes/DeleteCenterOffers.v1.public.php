<?php

/**
 * @apiGroup           CenterOffers
 * @apiName            deleteCenterOffers
 *
 * @api                {DELETE} /v1/centeroffers/:id Permet de supprimer une offre pour un centre
 * @apiDescription     Permet de supprimer une offre pour un centre
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
$router->delete('centeroffers/{id}', [
    'as' => 'api_centeroffers_delete_center_offers',
    'uses'  => 'Controller@deleteCenterOffers',
    'middleware' => [
      'auth:api',
    ],
]);
