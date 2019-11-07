<?php

namespace app\controllers;

use app\Models\utilisateur;

class loginController{

    public function __construct($container){
        $this->container = $container;
    }

    //Renvoie la page avec le formulaire pour se connecter
    public function signIn($request, $response){
        $this->container->view->render($response, 'user/connection.html.twig');
    }

    //Methode qui permet de se déconnecter 
    public function seDeconnecter($request, $response){
        session_destroy();
        $this->container->flash->addMessage('info', 'Vous venez de vous déconnecter');
        return $response->withRedirect($this->container->router->pathFor('accueil'));
    }

    public function seConnecter($request, $response,$args){
        echo $request->getParam('mail') . " ". $request->getParam('mdp');
        $auth = $this->verification(
            $request->getParam('mail'),
            $request->getParam('mdp')
        );
        var_dump($auth);

        if(!$auth){
            var_dump($this->container->flash->addMessage('error', 'Le couple Username/Password n\'est pas correct !'));
            return $response->withRedirect($this->container->router->pathFor('connexion'));
        }
        $this->container->flash->addMessage('success', 'Vous êtes connecté !');
        return $response->withRedirect($this->container->router->pathFor('accueil'));
    }

    public static function isConnected(){
        return isset($_SESSION['user']);
    }

    public function verification($mail, $mdp){
        $user = utilisateur::where('mail', $mail)->first();
        if(!$user){
            return false;
        }

        if(password_verify($mdp, $user->mdp)){
            $_SESSION['user'] = $user->id;
            return true;
        }else{
            return false;
        }

    }


}