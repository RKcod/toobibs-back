<?php

/**
 * @apiGroup           UserMeta
 * @apiName            getAllUserMetas
 *
 * @api                {GET} /v1/usermetas Récuperer tous les complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)
 * @apiDescription     Récuperer tous les complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)
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
$router->get('usermetas', [
    'as' => 'api_usermeta_get_all_user_metas',
    'uses'  => 'Controller@getAllUserMetas',
]);
