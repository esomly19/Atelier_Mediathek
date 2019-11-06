<?php

require_once '../vendor/autoload.php';
require_once '../src/config/config.inc.php';

use Slim\Http\Request;
use Slim\Http\Response;
use Illuminate\Database\Capsule\Manager as DB;

$RC = "</br></br>";

echo "hashage d'un mdp pour FClapetti" . $RC;
$password = 1234;
$mdp = password_hash($password, PASSWORD_DEFAULT);

echo $mdp;