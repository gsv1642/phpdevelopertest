<?php

namespace app\classes;

abstract class Student
{
    protected $id;
    protected $name;
    protected $board;

    abstract function show();
    abstract function isPassed();
}