<?php

namespace app\classes;

class Application
{
    public $router;
    public $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router();
    }

    public function run()
    {
        $method = $this->request->getMethod();
        $path = $this->request->getPath();

        if(isset($this->router->routes[$method][$path])){
            echo call_user_func($this->router->routes[$method][$path], $this->request);
        }else{
            echo '404 - Page not found';
        }

    }
}