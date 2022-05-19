<?php

namespace application\core;
require 'application/routes/routes.php';

class Router
{

    private $routes = null;
    private $url = null;

    function __construct()
    {
        $this->routes = getRoutes();
        $this->url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $this->pushRoute();
    }

    public function pushRoute()
    {
        $routeExists = array_key_exists($this->url, $this->routes);
        if (!$routeExists) {
            include 'application/views/errors/page404.php';
            die;
        }

        $route = $this->routes[$this->url];


    }



}
