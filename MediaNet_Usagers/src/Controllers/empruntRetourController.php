<?php

namespace app\controllers;

use app\models\Utilisateur;
use app\models\Emprunter;
use app\models\Document;

class empruntRetourController{

    public function __construct($container){
        $this->container = $container;
    }

    public function mesEmpruntRetour($request, $response){
        $user = Utilisateur::find($_SESSION['user']);
        $emprunts = Emprunter::where('id_utilisateur',$user->id)
            ->leftJoin('document','document.id','=','emprunter.id_document')
            ->get();
        $this->container->view->render($response, "EmpruntRetour.html.twig", ['Emprunts'=>$emprunts]);
    }

}