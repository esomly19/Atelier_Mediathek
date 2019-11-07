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

    public function suppEmprunt($request, $response) {
        $id_document = $_POST["ide"];
        $id_utilisateur = $_POST["idu"];
        $emprunt = Emprunter::where('emprunter.id_document', '=', $id_document)->whereAnd('emprunter.id_utilisateur', '=',$id_utilisateur)->first();
        $emprunt->delete();
        return $response->withRedirect($this->container->router->pathFor('infousager'));
    }
}