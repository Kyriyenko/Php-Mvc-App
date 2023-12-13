<?php

/** Keep sessions for a week **/
session_set_cookie_params(3600*24*7);
session_start();


ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);



require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/routes/web.php';

use App\App as Application;
use Dotenv\Dotenv as Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

Application::run();