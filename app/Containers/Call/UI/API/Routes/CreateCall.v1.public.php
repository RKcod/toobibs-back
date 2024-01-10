<?php

/**
 * @apiGroup           Call
 * @apiName            createCall
 *
 * @api                {POST} /v1/calls Permet de créer un appel
 * @apiDescription     Permet de créer un appel
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {integer}  user_from_id
 * @apiParam           {integer}  user_to_id
 * @apiParam           {integer}  rdv_id
 * @apiParam           {String}  duration
 * @apiParam           {integer}  has_missed
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('calls', [
    'as' => 'api_call_create_call',
    'uses'  => 'Controller@createCall',
    'middleware' => [
      'auth:api',
    ],
]);
