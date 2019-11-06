<?php

require_once '../../vendor/autoload.php';
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
$app->get('/d', "\\app\\controllers\\documentController:Index");

$app->get('/', function(Request $request, Response $response, $args){
    return $this->view->render($response, 'Accueil.html.twig');
});

$app->get('/usagers', function(Request $request, Response $response, $args){
    return $this->view->render($response, 'GestionUsagers.html.twig');
})->setName('usagers');

$app->get('/emprunts', function(Request $request, Response $response, $args){
    return $this->view->render($response, 'emprunts.html.twig');
})->setName('emprunts');

$app->get('/retour', function(Request $request, Response $response, $args){
    return $this->view->render($response, 'retour.html.twig');
})->setName('retour');

$app->get('/informationUtilisateurs', "\\app\\Controllers\\utilisateurController:informationUtilisateur");


try {
    $app->run();
} catch (Throwable $e) {
    var_dump($e);
}





