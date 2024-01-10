<?php

/**
 * @apiGroup           CenterOffers
 * @apiName            updateCenterOffers
 *
 * @api                {PATCH} /v1/centeroffers/:id Permet de modifier une offre pour un centre
 * @apiDescription     Permet de modifier une offre pour un centre
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
$router->patch('centeroffers/{id}', [
    'as' => 'api_centeroffers_update_center_offers',
    'uses'  => 'Controller@updateCenterOffers',
    'middleware' => [
      'auth:api',
    ],
]);
