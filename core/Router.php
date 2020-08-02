<?php

class Router{

    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public static function load()
    {
        $router = new self();  // or new static()
        require 'routes.php';
        return $router;
    }

    public function get($uri,$controller){
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri,$controller){
        $this->routes['POST'][$uri] = $controller;
    }

    public function define($routes){
        $this->routes = $routes;
    }

    public function direct($uri,$requestType)
    {
        $uri = trim($uri,'/');
        if (array_key_exists($uri,$this->routes[$requestType]))
            return $this->routes[$requestType][$uri];

        return new Exception('no route exist');
    }
}
