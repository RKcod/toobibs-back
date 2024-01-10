<?php

/**
 * @apiGroup           CenterOffers
 * @apiName            createCenterOffers
 *
 * @api                {POST} /v1/centeroffers Permet de créer une offre pour un centre
 * @apiDescription     Permet de créer une offre pour un centre
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  title
 * @apiParam           {String}  description
 * @apiParam           {String}  image
 * @apiParam           {String}  center_id
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('centeroffers', [
    'as' => 'api_centeroffers_create_center_offers',
    'uses'  => 'Controller@createCenterOffers',
    'middleware' => [
      'auth:api',
    ],
]);
