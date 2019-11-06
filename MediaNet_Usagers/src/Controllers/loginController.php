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

    public function seConnecter($request, $response,$args){
        $auth = $this->verification(
            $request->getParam('mail'),
            $request->getParam('mdp')
        );
        if(!$auth){
            $this->container->flash->addMessage('error', 'Le couple Username/Password n\'est pas correct !');
            return $response->withRedirect($this->container->router->pathFor('connexion'));
        }
        // self::loadProfile($user);
        $this->container->flash->addMessage('success', 'Vous êtes connecté !');
        return $response->withRedirect($this->container->router->pathFor('accueil'));
    }

    public static function isConnected(){
        return isset($_SESSION['nom']);
    }

    public function verification($mail, $mdp){
        $user = utilisateur::where('mail', $mail)->first();
        if(!$user){
            return false;
        }

        if(password_verify($mdp, $user->password)){
            $_SESSION['mail'] = $user->id;
            return true;
        }

        return false;
    }


}