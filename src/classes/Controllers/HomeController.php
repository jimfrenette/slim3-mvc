<?php

namespace App\Controllers;

use Slim\Views\Twig as View;

class HomeController
{
    protected $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function index($request, $response)
    {
        return $this->view->render($response, 'home.twig');
    }
}