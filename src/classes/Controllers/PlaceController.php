<?php

namespace App\Controllers;

use Slim\Views\Twig as View;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Place as Place;

class PlaceController
{
    public function index(Request $request, Response $response, View $view, Place $place)
    {
        $result = $place->getPlaceList();

        return $view->render($response, 'place.twig', array('places' => $result));
    }

    public function getPlace(Request $request, Response $response, View $view, Place $place)
    {
        $id = $request->getAttribute('route')->getArgument('id');

        $result = $place->getPlace($id);

        return $view->render($response, 'place.twig', array('place' => $result));
    }
}