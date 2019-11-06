<?php

global $BASE_URL;

$config=array();
$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;
$config['db'] = [
   'default'   => 'mysql',
   'driver'    => 'mysql',
   'host'      => "localhost",
   'database'  => "Atelier_Mediathek",
   'username'  => "totor",
   'password'  => "CAS|-|",
   'charset'   => 'utf8',
   'collation' => 'utf8_unicode_ci'
];