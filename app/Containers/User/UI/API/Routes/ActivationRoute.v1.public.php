<?php

/**
 * @apiGroup           User
 * @apiName            activateAccount
 *
 * @api                {PUT} /v1/activation Endpoint title here..
 * @apiDescription     Endpoint description here..
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
$router->put('activation/{id}', [
    'as' => 'api_user_activate_account',
    'uses'  => 'Controller@activateAccount'
]);
