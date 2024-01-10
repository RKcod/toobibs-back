<?php


$router->get('prescriptions-patient',[
'as'=>'api_appointment_get_prescriptions_patient',
'uses'=>'Controller@getPrescriptionPatient',
'middleware'=>[
	'auth:api',
],

]);
