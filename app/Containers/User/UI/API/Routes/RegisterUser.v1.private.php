<?php

/**
 * @apiGroup           Users
 * @apiName            registerUser
 * @api                {post} /v1/register Register User (create client)
 * @apiDescription     Register users as (client).
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  email (required)
 * @apiParam           {String}  password (required)
 * @apiParam           {String}  first_name (optional)
 * @apiParam           {String}  last_name (optional)
 * @apiParam           {String}  gender (optional)
 * @apiParam           {String}  birth (optional)
 * @apiParam           {String}  address (optional) - Only if doctor
 * @apiParam           {String}  phone (optional)
 * @apiParam           {String}  doctor_serial_number (optional) - Only if doctor
 * @apiParam           {String}  speciality (optional) - Only if doctor
 *
 * @apiUse             UserSuccessSingleResponse
 */

$router->post('/register', [
    'as' => 'api_user_register_user',
    'uses'  => 'Controller@registerUser',
]);
