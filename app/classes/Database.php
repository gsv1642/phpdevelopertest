<?php

namespace app\classes;

class Database
{
    public $pdo;
    public function __construct($config)
    {
        $this->pdo = new \PDO($config['dsn'], $config['user'], $config['password']);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}