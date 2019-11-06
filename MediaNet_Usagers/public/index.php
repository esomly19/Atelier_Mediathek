<?php

require_once '../vendor/autoload.php';
require_once '../src/config/config.inc.php';

use Slim\Http\Request;
use Slim\Http\Response;
use Illuminate\Database\Capsule\Manager as DB;

$container = array();

$container["view"] = function ($container){

    $view = new \Slim\Views\Twig(__DIR__.'/../src/Views');
    $router = $container->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));
    return $view;
};

$container['settings'] = $config;

//Eloquent
$app = new \Slim\app($container,[
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
$app->get('/d', "\\app\\controllers\\documentController:Index");

$app->get('/', function(Request $request, Response $response, $args){
    return $this->view->render($response, 'Accueil.html.twig');
})->setName('accueil');

$app->get('/connection', function(Request $request, Response $response, $args){
    return $this->view->render($response, 'Connexion.html.twig');
})->setName('connexion');

$app->get('/emprunt&retour', function(Request $request, Response $response, $args){
    return $this->view->render($response, 'EmpruntRetour.html.twig');
})->setName('emprunt&retour');

$app->get('/profil', function(Request $request, Response $response, $args){
    return $this->view->render($response, 'Profil.html.twig');
})->setName('profil');


$app->get('/catalogue', "\\app\\Controllers\\catalogueController:afficherCatalogue");


try {
    $app->run();
} catch (Throwable $e) {
    var_dump($e);
}





