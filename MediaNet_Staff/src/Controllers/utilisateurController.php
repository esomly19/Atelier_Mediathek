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
use Faker\Provider\tr_TR\DateTime;

class utilisateurController
{
    const salt = "@|-°+==00001ddQ";

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function gestionUsager($request, $response) {
        return $this->container->view->render($response, "utilisateur/gestionUsagers.html.twig");
    }
    public function informationUtilisateur($request, $response) {
        $listeUtilisateurs = Utilisateur::all();
        $listeCommandesUtilisateurs = Utilisateur::first()->Join('emprunter', 'emprunter.id_utilisateur', '=', 'utilisateur.id')->select(
            'mail',
            'emprunter.id'
        )->get();

        return $this->container->view->render($response, "utilisateur/ListeUtilisateurs.html.twig", ['utilisateurs'=>$listeUtilisateurs,'commandes'=>$listeCommandesUtilisateurs]);
    }
    
    public function voir($request, $response,$args)
	{
        return $this->container->view->render($response, "utilisateur/creationCompte.html.twig");

    }
    public function creerCompte($request, $response) {
            if(is_null(Utilisateur::find( $_POST["mail"]))){
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
                return $this->container->view->render($response, "utilisateur/ListeUtilisateurs.html.twig", ['utilisateurs'=>$listeUtilisateurs]);
            }else{
                return $this->container->view->render($response, "utilisateur/erreurmail.html.twig");
            }
    }

    public function informationUsager($request, $response) {
        $id = $_GET["idu"];
        $uti = Utilisateur::find($id);
        $listeDocumentEmprunt = Document::where('emprunter.id_utilisateur', '=', $id)->Join('emprunter', 'emprunter.id_document', '=', 'document.id')->get();
        return $this->container->view->render($response, "utilisateur/informationUtilisateur.html.twig",["uti"=>$uti,"emprunt"=> $listeDocumentEmprunt]);
    }
}