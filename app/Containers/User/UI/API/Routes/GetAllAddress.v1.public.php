<?php

/** @var Route $router */
$router->get('address', [
  'as' => 'api_user_get_address',
  'uses'  => 'Controller@getAllAddress'
]);
