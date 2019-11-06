<?php

namespace app\controllers;

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
            $request->getParam('identifiant'),
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

    public function verification($pseudo, $mdp){
        $user = User::where('username', $pseudo)->first();
        if(!$user){
            return false;
        }

        if(password_verify($mdp, $user->password)){
            $_SESSION['user'] = $user->id_user;
            return true;
        }

        return false;
    }


}