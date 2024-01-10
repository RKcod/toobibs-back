<?php


$router->get('appoints-patients',[
 'as'=>'api_appointments_get_Appoints_Patients',
 'uses'=>'Controller@getAppointsPatients',
 'middleware'=>[
	'auth:api',
 ],

]);
