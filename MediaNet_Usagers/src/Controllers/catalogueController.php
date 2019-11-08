<?php

namespace app\controllers;

use app\models\Document;
use app\models\Genre;

class catalogueController{

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function afficherCatalogue($request, $response) {
        $documents = Document::first()
            ->leftJoin('image', 'image.id_image', '=', 'document.id_image')
            ->leftJoin('genre', 'genre.id_genre', "=", "document.id_genre")
            ->get();

        $genres = Genre::first()->get();
        return $this->container->view->render($response, "Catalogue.html.twig", ['catalogue'=>$documents, 'genres'=>$genres]);
    }


}