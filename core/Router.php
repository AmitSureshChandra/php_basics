<?php

class Router{

    protected $routes = [];

    public static function load()
    {
        $router = new self();  // or new static()
        require 'routes.php';
        return $router;
    }

    public function define($routes){
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        $uri = trim($uri,'/');
        if (array_key_exists($uri,$this->routes))
            return $this->routes[$uri];

        return new Exception('no route exist');
    }
}
