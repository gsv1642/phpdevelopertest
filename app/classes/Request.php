<?php


namespace app\classes;


class Request
{
    protected $request;

    public function __construct()
    {
        $this->request = $_SERVER;
    }

    public function getMethod()
    {
        return strtolower($this->request['REQUEST_METHOD'] ?? 'get');
    }

    public function getPath()
    {

        $path = $this->request['REQUEST_URI'];
        $position = strpos($path, '?');
        if ($position == false){
            return $path;
        }

        return substr($path, 0, $position);

    }

    public function get($name){
        return isset($_GET[$name]) ? $_GET[$name] : false;
    }
}