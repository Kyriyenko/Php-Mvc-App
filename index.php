<?php

use application\core\Router as Router;
use application\database\Db as Db;

/**
* show errors
*/
ini_set('display_errors', 1);
error_reporting(E_ALL);

function debug($str){
   echo '<br/>' . var_dump($str) . '<br/>';
}

spl_autoload_register(function ($class){
    $path = str_replace('\\', '/', $class . '.php');
    if(file_exists($path)) {
        require $path;
    }
});

session_start();

$router = new Router();
$dB = new Db();

