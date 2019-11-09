<?php

namespace app\controllers;

use app\models\Document;
use app\models\Emprunter;
use app\models\Utilisateur;
use Faker\Provider\DateTime;
use Illuminate\Support\Facades\Date;

class emprunterController
{
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function emprunterinfo($request, $response) {
        $listeemprunts = Emprunter::where('emprunter.date_retour', '!=', null)->Join('utilisateur', 'utilisateur.id', '=', 'emprunter.id_utilisateur')->Join('document', 'document.id', '=', 'emprunter.id_document')->select(
            'mail',
            'emprunter.id',
            'document.code',
            'document.titre',
            'date_emprunt',
            'date_retour',
            'date_limite'
        )->get();

        foreach ($listeemprunts as $emprunt) {
            $datelimite = date_create($emprunt["date_limite"]);
            $dateretour = date_create($emprunt["date_retour"]);

            $retard = date_diff($dateretour, $datelimite);
            $retard = $retard->format('%R%a');


            $emprunt["retard"] = $retard;


        }

        return $this->container->view->render($response, "emprunts.html.twig", ['emprunts'=>$listeemprunts]);
    }

    public function retourinfo($request, $response) {
        $listeemprunts = Emprunter::where('emprunter.date_retour', '=', null)->Join('utilisateur', 'utilisateur.id', '=', 'emprunter.id_utilisateur')->Join('document', 'document.id', '=', 'emprunter.id_document')->select(
            'mail',
            'emprunter.id',
            'document.code',
            'document.titre',
            'date_emprunt',
            'date_retour',
            'date_limite'
        )->get();


        return $this->container->view->render($response, "retour.html.twig", ['emprunts'=>$listeemprunts]);
    }

    public function rendreDoc($request, $response) {
        $id_document = $_GET["ide"];
        $id_utilisateur = $_GET["idu"];
        $utilisateur = Utilisateur::where("id","=",$id_utilisateur)->first();
        $document = Document::where("id","=",$id_document)->first();
        $emprunt = Emprunter::where('emprunter.id_document', '=', $id_document)->where('emprunter.id_utilisateur', '=',$id_utilisateur)->first();
        $listedocuments = Document::where("document.etat", "=", "1")->where("emprunter.date_retour",'=', null)->where("emprunter.id_utilisateur", "=" ,$id_utilisateur)->Join("emprunter", "emprunter.id_document","=","document.id")->get();

        return $this->container->view->render($response, "emprunter/rendredocument.html.twig", ['emprunt'=>$emprunt, 'utilisateur'=>$utilisateur, 'document'=>$document, 'listeDesDocuments'=>$listedocuments]);
    }

    public function traiterRendreDoc($request, $response) {
        $id_utilisateur = $_POST["idu"];
        $id_doc = $_POST["id_doc"];
        $date_rendu = $_POST["dateRendu"];
        $emprunt = Emprunter::where('emprunter.id_document', '=', $id_doc)->where('emprunter.id_utilisateur', '=',$id_utilisateur)->first();
        $emprunt->date_retour = $date_rendu;
        $document = Document::where('id', "=",$id_doc)->first();
        $document->etat = 0;
        $document->save();
        $emprunt->save();
        return $response->withRedirect($this->container->router->pathFor("listusagers"));
    }

    public function emprunterDoc($request, $response) {
        $id_document = $_GET["idd"];
        $document = Document::where("id","=",$id_document)->first();
        $listedocuments = Document::where("document.etat", "=", "0")->get();
        $listeutilisateurs = Utilisateur::all();
        return $this->container->view->render($response, "emprunter/emprunterDocument.html.twig", ['document'=>$document, 'listeDesDocuments'=>$listedocuments, 'listeUtilisateurs'=>$listeutilisateurs]);
    }

    public function traiterEmprunterDoc($request, $response) {
        $id_document = $_POST["id_doc"];
        $mail = $_POST["mail"];
        $date = $_POST["date"];
        $utilisateur = Utilisateur::where('mail', '=', $mail)->first();
        $emprunt = new Emprunter();
        $emprunt->id_document = $id_document;
        $emprunt->id_utilisateur = $utilisateur->id;
        $emprunt->date_emprunt = $date;
        $emprunt->date_limite = date('Y-m-d', strtotime('+15 days'));
        $emprunt->date_retour = null;
        $document = Document::where('id', "=",$id_document)->first();
        if($document->etat == 0){
            $document->etat = 1;
            $document->save();
            $emprunt->save();
            return $response->withRedirect($this->container->router->pathFor('documents'));
        }else {
            return $response->withRedirect($this->container->router->pathFor('emprunter'));
        }

    }

    public function faireDesEmprunts($request, $response) {
        $id_utilisateur = $_GET["idu"];
        $utilisateur = Utilisateur::where("id","=",$id_utilisateur)->first();
        $listedocuments = Document::where("document.etat", "=", "0")->get();

        return $this->container->view->render($response, "emprunter/emprunterDesDocuments.html.twig", ['utilisateur'=>$utilisateur, 'listeDesDocuments'=>$listedocuments]);
    }

    public function traiterfaireDesEmprunts($request, $response) {
        $id_utilisateur = $_POST["idu"];
        $listeDoc = $_POST["liste"];
        $listeDoc = explode(",", $listeDoc);
        $date = $_POST["date"];
            foreach ($listeDoc as $id) {
                $utilisateur = Utilisateur::where('id', '=', $id_utilisateur)->first();
                $emprunt = new Emprunter();
                $emprunt->id_document = $id;
                $emprunt->id_utilisateur = $utilisateur->id;
                $emprunt->date_emprunt = $date;
                $emprunt->date_limite = date('Y-m-d', strtotime('+15 days'));
                $emprunt->date_retour = null;
                $document = Document::where('id', "=", $id)->first();
                $document->etat = 1;
                $document->save();
                $emprunt->save();
            }

        return $response->withRedirect($this->container->router->pathFor('listusagers'));

    }
}