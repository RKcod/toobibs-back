<?php

/**
 * @apiGroup           Prices
 * @apiName            getAllPrices
 *
 * @api                {GET} /v1/prices Récuperer tous les tarifs de consultation
 * @apiDescription     Récuperer tous les tarifs de consultation
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
$router->get('prices', [
    'as' => 'api_prices_get_all_prices',
    'uses'  => 'Controller@getAllPrices',
    'middleware' => [
      'auth:api',
    ],
]);
