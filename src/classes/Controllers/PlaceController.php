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
        $result = $this->place->getPlaceList();
        return $this->view->render(
        	$response,
        	'place.twig',
        	array('places' => $result)
        );
    }

    public function getPlace($request, $response, $args)
    {
        $result = $this->place->getPlace($args['id']);
        return $this->view->render(
        	$response,
        	'place.twig',
        	array('place' => $result)
        );        
    }
}