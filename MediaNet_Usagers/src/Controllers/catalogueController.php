<?php

namespace app\controllers;

use app\models\document;

class catalogueController{


    public function afficherCatalogue($request, $response) {
        $documents = document::all();
        return $this->container->view->render($response, "utilisateur/Catalogue.html.twig", ['docs'=>$documents]);
    }


}