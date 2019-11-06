<?php

namespace app\controllers;

use app\models\Emprunter;

class emprunterController
{
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function emprunterinfo($request, $response) {
        $listeemprunts = Emprunter::all();
        return $this->container->view->render($response, "emprunts.html.twig", ['emprunts'=>$listeemprunts]);
    }

    public function retourinfo($request, $response) {
        $listeemprunts = Emprunter::all();
        return $this->container->view->render($response, "retour.html.twig", ['emprunts'=>$listeemprunts]);
    }
}