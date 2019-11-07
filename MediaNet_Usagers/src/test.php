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
	'charset' => 'utf8', bite
	'collation' => 'utf8_general_ci'
]);
$db->setAsGlobal();
$db->bootEloquent();

$RC = "</br></br>";
$salt = "@|-°+==00001ddQ";


echo "hashage d'un mdp + sel" . $RC;
$password = 1234 . $salt;
$mdp = password_hash($password, PASSWORD_DEFAULT);

echo $mdp . $RC;

