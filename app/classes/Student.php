<?php

namespace app\classes;

abstract class Student
{
    protected $id;
    protected $name;
    protected $board;
    protected $grades;

    abstract function show();
    abstract function isPassed();
}