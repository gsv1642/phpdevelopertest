<?php

require_once __DIR__ .'/../vendor/autoload.php';

use app\classes\Application;

$app = new Application();

$app->router->get('/', function (){
    return 'Get Student data';
});

$app->run();
echo 'index';