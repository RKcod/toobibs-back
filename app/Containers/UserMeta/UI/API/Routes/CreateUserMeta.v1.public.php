<?php

/**
 * @apiGroup           UserMeta
 * @apiName            createUserMeta
 *
 * @api                {POST} /v1/usermetas Créer un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)
 * @apiDescription     Créer un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {integer}  doctor_id
 * @apiParam           {integer}  start_year
 * @apiParam           {integer}  end_year
 * @apiParam           {String}  title
 * @apiParam           {String}  description
 * @apiParam           {String}  at
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('usermetas', [
    'as' => 'api_usermeta_create_user_meta',
    'uses'  => 'Controller@createUserMeta',
    'middleware' => [
      'auth:api',
    ],
]);
