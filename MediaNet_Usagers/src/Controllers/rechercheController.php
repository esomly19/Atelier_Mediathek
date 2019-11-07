<?php


namespace app\controllers;


class rechercheController{

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function recherche($request, $response) {
        /*$documents = document::first()
            ->leftJoin('image', 'image.id_image', '=', 'document.id_image')
            ->leftJoin('genre', 'genre.id_genre', "=", "document.id_genre")
            ->get();

        $genres = Genre::first()->get();*/
        return $this->container->view->render($response, "Recherche.html.twig" /*, ['catalogue'=>$documents, 'genres'=>$genres]*/);
    }

}