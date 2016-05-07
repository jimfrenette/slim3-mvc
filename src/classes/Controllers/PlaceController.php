<?php

namespace App\Controllers;

use App\Models\Place as Model;
use Slim\Views\Twig as View;

class PlaceController
{
    protected $place;
    protected $view;

    public function __construct(Model $place, View $view)
    {
        $this->place = $place;
        $this->view = $view;
    }

    public function index($request, $response)
    {
        $place = $this->place->getPlaceList();
        var_dump($place);
        return $this->view->render($response, 'place.twig');
    }

    public function getPlace($request, $response, $args)
    {
        //var_dump($args);
        $place = $this->place->getPlace($args['id']);
        var_dump($place);
        return $this->view->render($response, 'place.twig');
    }
}