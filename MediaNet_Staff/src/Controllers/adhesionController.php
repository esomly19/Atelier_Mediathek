<?php

namespace app\controllers;

use app\models\Adhesion;
use app\models\Utilisateur;

class adhesionController{
    const salt = "@|-°+==00001ddQ";
    public function __construct($container){
        $this->container = $container;
    }

    public function adhesion($request, $response) {
        $listeAdhesion = Adhesion::all();
         return $this->container->view->render($response, "utilisateur/Listeadhesion.html.twig",["ladhesion"=>$listeAdhesion]);
    }

    public function accepter($request, $response, $args){
        $adh = Adhesion::find(intVal($args['id']));
        $user= new Utilisateur();
        $user->nom = $adh->nom;
        $user->prenom = $adh->prenom;
        $password = $adh->mdp.self::salt;
        $user->mdp = password_hash($password, PASSWORD_DEFAULT);
        $user->mail = $adh->mail;
        $user->adresse =$adh->adresse;
        $user->telephone = $adh->telephone;
        $user->date_adhesion = date("Y/m/d");
        $user->save();       
        $adh->delete();
        $listeAdhesion = Adhesion::all();
        return $this->container->view->render($response, "utilisateur/Listeadhesion.html.twig",["ladhesion"=>$listeAdhesion]);
      }
    
    public function refuser($request, $response, $args) {
        $adh = Adhesion::find(intVal($args['id']));
        $adh->delete();
        $listeAdhesion = Adhesion::all();
        return $this->container->view->render($response, "utilisateur/Listeadhesion.html.twig",["ladhesion"=>$listeAdhesion]);
    }

}