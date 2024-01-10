<?php

/**
 * @apiGroup           CenterOffers
 * @apiName            findCenterOffersById
 *
 * @api                {GET} /v1/centeroffers/:id Permet de récuperer une offre
 * @apiDescription     Permet de récuperer une offre
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
$router->get('centeroffers/{id}', [
    'as' => 'api_centeroffers_find_center_offers_by_id',
    'uses'  => 'Controller@findCenterOffersById',
    'middleware' => [
      'auth:api',
    ],
]);
