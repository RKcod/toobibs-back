<?php
/** @var Route $router */
$router->post('address', [
  'as' => 'api_user_find_user',
  'uses' => 'Controller@createAddress',
]);
