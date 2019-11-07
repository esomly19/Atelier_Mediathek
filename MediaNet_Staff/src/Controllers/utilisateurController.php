<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 05/11/2019
 * Time: 16:06
 */

namespace app\controllers;


use app\models\Document;
use app\models\Emprunter;
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
        $listeCommandesUtilisateurs = Utilisateur::first()->Join('emprunter', 'emprunter.id_utilisateur', '=', 'utilisateur.id')->select(
            'mail',
            'emprunter.id'
        )->get();

        return $this->container->view->render($response, "utilisateur/ListeUtilisateurs.html.twig", ['utilisateurs'=>$listeUtilisateurs,'commandes'=>$listeCommandesUtilisateurs]);
    }

    public function creerCompte($request, $response) {
        $listeUtilisateurs = Utilisateur::all();
        return $this->container->view->render($response, "creationCompte.html.twig", ['utilisateurs'=>$listeUtilisateurs]);
    }

    public function informationUsager($request, $response) {
        $id = $_GET["idu"];
        $uti = Utilisateur::find($id);
        $listeDocumentEmprunt = Document::where('emprunter.id_utilisateur', '=', $id)->Join('emprunter', 'emprunter.id_document', '=', 'document.id')->get();
        return $this->container->view->render($response, "utilisateur/informationUtilisateur.html.twig",["uti"=>$uti,"emprunt"=> $listeDocumentEmprunt]);
    }
}