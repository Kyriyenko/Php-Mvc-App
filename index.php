<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/routes/web.php';

use App\App as Application;
use Dotenv\Dotenv as Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

Application::run();