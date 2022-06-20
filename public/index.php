<?php

require_once __DIR__ .'/../vendor/autoload.php';

use app\classes\Application;

$app = new Application();


$app->run();
echo 'index';