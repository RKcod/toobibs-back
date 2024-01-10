<?php

/**
 * @apiGroup           UserMeta
 * @apiName            deleteUserMeta
 *
 * @api                {DELETE} /v1/usermetas/:id Supprimer un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)
 * @apiDescription     Supprimer un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)
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
$router->delete('usermetas/{id}', [
    'as' => 'api_usermeta_delete_user_meta',
    'uses'  => 'Controller@deleteUserMeta',
    'middleware' => [
      'auth:api',
    ],
]);
