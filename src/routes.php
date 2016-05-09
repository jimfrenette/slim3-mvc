<?php

$app->get('/', ['\App\Controllers\HomeController', 'index']);

$app->get('/place', ['\App\Controllers\PlaceController', 'index']);

$app->get('/place/{id}', ['\App\Controllers\PlaceController', 'getPlace']);