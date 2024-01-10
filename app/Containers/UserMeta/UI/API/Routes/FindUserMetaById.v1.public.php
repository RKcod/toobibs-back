<?php

/**
 * @apiGroup           UserMeta
 * @apiName            findUserMetaById
 *
 * @api                {GET} /v1/usermetas/:id Récuperer un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)
 * @apiDescription     Récuperer un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)
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
$router->get('usermetas/{id}', [
    'as' => 'api_usermeta_find_user_meta_by_id',
    'uses'  => 'Controller@findUserMetaById',
    'middleware' => [
      'auth:api',
    ],
]);
