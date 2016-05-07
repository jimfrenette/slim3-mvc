<?php

$app->get('/', 'HomeController:index')->setName('home');

$app->get('/place', 'PlaceController:index')->setName('place');;

$app->get('/place/{id}', 'PlaceController:getPlace');