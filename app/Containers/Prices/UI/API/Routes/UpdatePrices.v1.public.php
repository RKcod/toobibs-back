<?php

/**
 * @apiGroup           Prices
 * @apiName            updatePrices
 *
 * @api                {PATCH} /v1/prices/:id Mettre à jour un tarif de consultation
 * @apiDescription     Mettre à jour un tarif de consultation
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {integer}  id
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->put('prices/{id}', [
    'as' => 'api_prices_update_prices',
    'uses'  => 'Controller@updatePrices',
    'middleware' => [
      'auth:api',
    ],
]);
