<?php

namespace app\controllers;

use app\models\document;

class catalogueController{

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function afficherCatalogue($request, $response) {
        $documents = document::all();
        return $this->container->view->render($response, "Catalogue.html.twig", ['docs'=>$documents]);
    }


}