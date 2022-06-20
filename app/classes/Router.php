<?php


namespace app\classes;


class Router
{
    public $routes = [];

    public function __construct()
    {

    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

}