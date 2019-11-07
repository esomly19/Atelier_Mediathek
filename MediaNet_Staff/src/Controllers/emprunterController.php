<?php

namespace app\controllers;

use app\models\Document;
use app\models\Emprunter;
use app\models\Utilisateur;
use Illuminate\Support\Facades\Date;

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

        /**$emprunt->date_rendu = new Date();
        $emprunt->save();
        $document = Document::find($id_document)->first();
        $document->etat = 0;
        $document->save();*/
        //return $response->withRedirect($this->container->router->pathFor('infousager'));
    }

    public function rendreDoc($request, $response) {
        $id_document = $_GET["ide"];
        $id_utilisateur = $_GET["idu"];
        $utilisateur = Utilisateur::where("id","=",$id_utilisateur)->first();
        $document = Document::where("id","=",$id_document)->first();
        $emprunt = Emprunter::where('emprunter.id_document', '=', $id_document)->whereAnd('emprunter.id_utilisateur', '=',$id_utilisateur)->first();
        $listedocuments = Document::where("document.etat", "=", "1")->where("emprunter.date_retour",'=', null)->where("emprunter.id_utilisateur", "=" ,$id_utilisateur)->Join("emprunter", "emprunter.id_document","=","document.id")->get();

        return $this->container->view->render($response, "rendredocument.html.twig", ['emprunt'=>$emprunt, 'utilisateur'=>$utilisateur, 'document'=>$document, 'listeDesDocuments'=>$listedocuments]);
    }
}