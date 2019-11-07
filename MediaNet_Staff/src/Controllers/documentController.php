<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 05/11/2019
 * Time: 14:24
 */

namespace app\controllers;

use app\models\Document;

class documentController
{
    public function __construct($container)
    {
        $this->container = $container;
    }

   
    public function voir($request, $response) {
        $listeDocuments = Document::all();
        return $this->container->view->render($response, "documents/listeDocuments.html.twig",['documents'=>$listeDocuments]);
    }

    public function creerDocuements($request, $response) {
        return $this->container->view->render($response, "documents/listeDocuements.html.twig");
    }
}