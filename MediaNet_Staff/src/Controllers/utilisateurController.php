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

    public function informationUtilisateur($request, $response) {
        $listeUtilisateurs = Utilisateur::all();
        $listeCommandesUtilisateurs = Utilisateur::first()->Join('emprunter', 'emprunter.id_utilisateur', '=', 'utilisateur.id')->select(
            'mail',
            'emprunter.id'
        )->get();

        return $this->container->view->render($response, "utilisateur/informationUtilisateur.html.twig", ['utilisateurs'=>$listeUtilisateurs,'commandes'=>$listeCommandesUtilisateurs]);
    }

}