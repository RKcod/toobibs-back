<?php

/**
 * @apiGroup           User
 * @apiName            searchusers
 *
 * @api                {GET} /v1/searchusers Endpoint title here..
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
$router->get('searchusers', [
    'as' => 'api_user_searchusers',
    'uses'  => 'Controller@searchusers',
]);
