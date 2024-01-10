<?php

/**
 * @apiGroup           Prices
 * @apiName            deletePrices
 *
 * @api                {DELETE} /v1/prices/:id Supprimer un tarif de consultation
 * @apiDescription     Supprimer un tarif de consultation
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
$router->delete('prices/{id}', [
    'as' => 'api_prices_delete_prices',
    'uses'  => 'Controller@deletePrices',
    'middleware' => [
      'auth:api',
    ],
]);
