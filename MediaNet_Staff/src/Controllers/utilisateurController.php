<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 05/11/2019
 * Time: 16:06
 */

namespace app\controllers;


use app\models\Utilisateur;
use Faker\Provider\tr_TR\DateTime;

class utilisateurController
{
    const salt = "@|-°+==00001ddQ";

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function gestionUsager($request, $response) {
        return $this->container->view->render($response, "gestionUsagers.html.twig");
    }
    public function informationUtilisateur($request, $response) {
        $listeUtilisateurs = Utilisateur::all();
        return $this->container->view->render($response, "utilisateur/informationUtilisateur.html.twig", ['utilisateurs'=>$listeUtilisateurs]);
    }
    
    public function voir($request, $response,$args)
	{
        return $this->container->view->render($response, "creationCompte.html.twig");

    }
    public function creerCompte($request, $response) {
        $user= new Utilisateur();
        $user->nom = $_POST["nom"];
        $user->prenom = $_POST["prenom"];
        $password = $_POST["mdp"].self::salt;
        $user->mdp = password_hash($password, PASSWORD_DEFAULT);
        $user->mail = $_POST["mail"];
        $user->adresse = $_POST["adresse"];
        $user->telephone = $_POST["telephone"];
        $user->date_adhesion = date("Y/m/d");
        $user->save();
        $listeUtilisateurs = Utilisateur::all();
        return $this->container->view->render($response, "utilisateur/informationUtilisateur.html.twig", ['utilisateurs'=>$listeUtilisateurs]);
    }

}