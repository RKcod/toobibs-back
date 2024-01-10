<?php

/**
 * @apiGroup           Prices
 * @apiName            createPrices
 *
 * @api                {POST} /v1/prices Créer un tarif de consultation
 * @apiDescription     Créer un tarif de consultation
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {double}  price_cabinet_consultation
 * @apiParam           {double}  price_teleconsultation
 * @apiParam           {double}  price_house_consultation
 * @apiParam           {string}  currency
 * @apiParam           {integer}  centers_id
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('prices', [
    'as' => 'api_prices_create_prices',
    'uses'  => 'Controller@createPrices',
    'middleware' => [
      'auth:api',
    ],
]);
