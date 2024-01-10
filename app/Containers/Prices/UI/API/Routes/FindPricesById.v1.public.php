<?php

/**
 * @apiGroup           Prices
 * @apiName            findPricesById
 *
 * @api                {GET} /v1/prices/:id Recuperer un tarif de consultation
 * @apiDescription     Récuperer un tarif de consultation
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
$router->get('prices/{id}', [
    'as' => 'api_prices_find_prices_by_id',
    'uses'  => 'Controller@findPricesById',
    'middleware' => [
      'auth:api',
    ],
]);
