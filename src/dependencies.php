<?php
// DIC configuration

$container = $app->getContainer();

$container['db'] = function ($c) {
    return new PDO('sqlite:../data/demo.db');
};

$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig(__DIR__ . '/templates', [
        'cache' => false,
    ]);

    $view->addExtension(new \Slim\Views\TwigExtension(
        $c->router,
        $c->request->getUri()
    ));

    return $view;
};

// Models
$container['place'] = function ($c) {
    return new \App\Models\Place(
        $c->db
    );
};

// Controllers
$container['HomeController'] = function ($c) {
    return new \App\Controllers\HomeController(
        $c->view
    );
};

$container['PlaceController'] = function ($c) {
    return new \App\Controllers\PlaceController(
        $c->place,
        $c->view
    );
};