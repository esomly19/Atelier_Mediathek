<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 05/11/2019
 * Time: 14:24
 */

namespace app\controllers;

use app\models\document;
use app\models\Genre;

class documentController
{
    public function __construct($container)
    {
        $this->container = $container;
    }

   
    public function voir($request, $response) {
        $documents = document::first()
        ->leftJoin('image', 'image.id_image', '=', 'document.id_image')
        ->leftJoin('genre', 'genre.id_genre', "=", "document.id_genre")
        ->get();

    $genres = Genre::first()->get();
    return $this->container->view->render($response, "documents/Catalogue.html.twig", ['catalogue'=>$documents, 'genres'=>$genres]);
    }

    public function creerDocuements($request, $response) {
        return $this->container->view->render($response, "documents/listeDocuements.html.twig");
    }
}