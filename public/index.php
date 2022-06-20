<?php

require_once __DIR__ .'/../vendor/autoload.php';

use app\classes\Application;
use app\controllers\StudentController;
$app = new Application();

$app->router->get('/', [StudentController::class, 'getStudent']);

$app->run();