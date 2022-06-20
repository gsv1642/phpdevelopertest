<?php

require_once __DIR__ .'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$database = [
    'dsn' => $_ENV['DB_DSN'],
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD'],
];

use app\classes\Application;
use app\controllers\StudentController;


$app = new Application($database);

$app->router->get('/', [StudentController::class, 'getStudent']);

$app->run();