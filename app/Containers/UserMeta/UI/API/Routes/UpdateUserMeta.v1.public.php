<?php

/**
 * @apiGroup           UserMeta
 * @apiName            updateUserMeta
 *
 * @api                {PATCH} /v1/usermetas/:id Modifier un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)
 * @apiDescription     Modifier un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {integer}  id
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
$router->patch('usermetas/{id}', [
    'as' => 'api_usermeta_update_user_meta',
    'uses'  => 'Controller@updateUserMeta',
    'middleware' => [
      'auth:api',
    ],
]);
