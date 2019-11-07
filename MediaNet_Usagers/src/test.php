<?php

require_once '../vendor/autoload.php';

use app\Models\utilisateur;

use Slim\Http\Request;
use Slim\Http\Response;
use Illuminate\Database\Capsule\Manager as DB;

$db=new DB();
$db->addConnection([
    'default'   => 'mysql',
	'driver' => 'mysql',
	'host' => 'localhost',
	'database' => 'Atelier_Mediathek',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	'collation' => 'utf8_general_ci'
]);
$db->setAsGlobal();
$db->bootEloquent();

$RC = "</br></br>";

echo "hashage d'un mdp pour FClapetti" . $RC;
$password = 1234;
$mdp = password_hash($password, PASSWORD_DEFAULT);

echo $mdp . $RC;


echo "testage de la co a la base . $RC";
$user = utilisateur::where('id',1)->first();

var_dump($user);