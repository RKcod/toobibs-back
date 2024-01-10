<?php

/**
 * @apiGroup           Users
 * @apiName            deleteUser
 * @api                {delete} /v1/users/:id Delete User
 * @apiDescription     Delete users of any type (Admin, Client...)
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 202 OK
{
    "message": "User (4) Deleted Successfully."
}
 */

$router->delete('address/{id}', [
    'as' => 'api_user_delete_address',
    'uses'       => 'Controller@deleteAddress',
]);
