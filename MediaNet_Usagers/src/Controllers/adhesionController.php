<?php

namespace app\controllers;

use app\models\Adhesion;
use app\models\Utilisateur;

class adhesionController{
    
    public function __construct($container){
        $this->container = $container;
    }

    public function voir($request, $response,$args)
	{
        return $this->container->view->render($response, "DemandeAdhesion.html.twig");

    }
    public function demandeAdhesion($request, $response) {
                $user= new Adhesion();
                $user->nom = $_POST["nom"];
                $user->prenom = $_POST["prenom"];
                $user->mdp = $_POST["mdp"];
                $user->mail = $_POST["mail"];
                $user->adresse = $_POST["adresse"];
                $user->telephone = $_POST["telephone"];
                $user->date_adhesion = date("Y/m/d");
                $user->save();
                return $this->container->view->render($response, "Accueil.html.twig");
          
    }

}