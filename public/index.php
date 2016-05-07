<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ],
]);

require __DIR__ . '/../src/dependencies.php';

require __DIR__ . '/../src/routes.php';

$app->run();
