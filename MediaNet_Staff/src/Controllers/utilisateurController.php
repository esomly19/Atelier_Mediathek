<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 05/11/2019
 * Time: 16:06
 */

namespace app\controllers;


use app\models\Utilisateur;

class utilisateurController
{

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

    public function creerCompte($request, $response) {
        $listeUtilisateurs = Utilisateur::all();
        return $this->container->view->render($response, "creationCompte.html.twig", ['utilisateurs'=>$listeUtilisateurs]);
    }

}