<?php

require_once __DIR__ .'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use app\classes\Application;
use app\controllers\StudentController;

$app = new Application();

$app->router->get('/', [StudentController::class, 'getStudent']);

$app->run();