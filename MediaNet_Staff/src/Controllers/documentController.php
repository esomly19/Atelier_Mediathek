<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 05/11/2019
 * Time: 14:24
 */

namespace app\controllers;

use app\models\Document;
use app\models\Genre;

class documentController
{
    public function __construct($container)
    {
        $this->container = $container;
    }

   
    public function voir($request, $response) {
        $documents = Document::first()
        ->leftJoin('image', 'image.id_image', '=', 'document.id_image')
        ->leftJoin('genre', 'genre.id_genre', "=", "document.id_genre")
        ->get();

    $genres = Genre::first()->get();
    return $this->container->view->render($response, "documents/Catalogue.html.twig", ['catalogue'=>$documents, 'genres'=>$genres]);
    }

    public function creerDocuements($request, $response) {
        return $this->container->view->render($response, "documents/listeDocuements.html.twig");
    }

    
    public function modifier($request, $response, $args){
        $documents = document::find(intVal($args['id']));
        $this->container->view->render($response, 'documents/modificationDocuments.html.twig', ['document'=>$documents]);
      }


    
      public  function update($request, $response, $args)
      {
        $doc = document::find(intVal($args['id']));
        $doc->titre = $_POST["titre"];
        $doc->description_doc = $_POST["description_doc"];
        $doc->code = $_POST["code"];
        $doc->etat = $_POST["etat"];
        $doc->id_genre = $_POST["id_genre"];
        $doc->type = $_POST["type"];
        $doc->save();
        $doc = document::first()
        ->leftJoin('image', 'image.id_image', '=', 'document.id_image')
        ->leftJoin('genre', 'genre.id_genre', "=", "document.id_genre")
        ->get();

         $genres = Genre::first()->get();
         return $this->container->view->render($response, "documents/Catalogue.html.twig", ['catalogue'=>$doc, 'genres'=>$genres]);
      }
  
      
      public function ajouter($request, $response, $args){
        $this->container->view->render($response, 'documents/creationDocument.html.twig');
      }


    
      public  function afficher($request, $response, $args)
      {
        $doc = new document();
        $doc->titre = $_POST["titre"];
        $doc->id_image = $_POST["id_image"];
        $doc->description_doc = $_POST["description_doc"];
        $doc->code = $_POST["code"];
        $doc->etat = $_POST["etat"];
        $doc->id_genre = $_POST["id_genre"];
        $doc->type = $_POST["type"];
        $doc->save();
        $doc = document::first()
        ->leftJoin('image', 'image.id_image', '=', 'document.id_image')
        ->leftJoin('genre', 'genre.id_genre', "=", "document.id_genre")
        ->get();

         $genres = Genre::first()->get();
         return $this->container->view->render($response, "documents/Catalogue.html.twig", ['catalogue'=>$doc, 'genres'=>$genres]);
      }
    
}