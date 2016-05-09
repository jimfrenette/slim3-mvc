<?php

$app->get('/', ['\App\Controllers\HomeController', 'index']);
//$app->get('/', 'HomeController:index')->setName('home');

//$app->get('/place', 'PlaceController:index')->setName('place');;
$app->get('/place', ['\App\Controllers\PlaceController', 'index']);

//$app->get('/place/{id}', 'PlaceController:getPlace');
$app->get('/place/{id}', ['\App\Controllers\PlaceController', 'getPlace']);