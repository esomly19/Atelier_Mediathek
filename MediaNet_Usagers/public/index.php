<?php

require_once '../vendor/autoload.php';
require_once '../src/config/config.inc.php';

use Slim\Http\Request;
use Slim\Http\Response;
use Illuminate\Database\Capsule\Manager as DB;
use app\middleware\AuthMiddleware;

$container = array();

$container['flash'] = function ($container){
    return new \Slim\Flash\Messages;
};

$container['auth'] = function ($container){
    return new app\Controllers\loginController($container);
};

$container["view"] = function ($container){

    $view = new \Slim\Views\Twig(__DIR__.'/../src/Views');
    $router = $container->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));
    $view->getEnvironment()->addGlobal('auth', new app\Controllers\loginController($container));
    $view->getEnvironment()->addGlobal('flash', $container->flash);
    return $view;
};


$container['settings'] = $config;

//Eloquent
$app = new \Slim\App($container,[
    'settings' => [
        'debug' => true,
        'displayErrorDetails' => true
    ]
]);

/**
 * on initialise la conn
 */
$capsule = new DB();
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule) {
    return $capsule;
};

session_start();

$app->get('/d', "\\app\\controllers\\documentController:Index");

$app->get('/', function(Request $request, Response $response, $args){
    return $this->view->render($response, 'Accueil.html.twig');
})->setName('accueil');

$app->get('/connection', function(Request $request, Response $response, $args){
    return $this->view->render($response, 'Connexion.html.twig');
})->setName('connexion');
$app->post('/connection', "\\app\\Controllers\\loginController:seConnecter");

$app->get('/deconnection', "\\app\\Controllers\\loginController:seDeconnecter")->setName('deconnection');

$app->get('/demandadhesion', "\\app\\Controllers\\adhesionController:voir")->setName('demandadhesion');
$app->post('/demandadhesion', "\\app\\Controllers\\adhesionController:demandeAdhesion");





$app->get('/catalogue', "\\app\\Controllers\\catalogueController:afficherCatalogue")->setName('catalogue');

$app->group('', function() {
    $this->get('/emprunt&retour', "\\app\\Controllers\\empruntRetourController:mesEmpruntRetour")->setName('emprunt&retour');
    
    $this->get('/profil',"\\app\\Controllers\\loginController:monProfil")->setName('profil');

})->add(new AuthMiddleware($app->getContainer()));

try {
    $app->run();
} catch (Throwable $e) {
    var_dump($e);
}
