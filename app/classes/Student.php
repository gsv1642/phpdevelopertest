<?php

namespace app\classes;

abstract class Student
{
    const CSM_TYPE = 1;
    const SCMB_TYPE = 2;

    protected $id;
    protected $name;
    protected $grades;

    abstract function show();
    abstract function isPassed();

    protected function getAverage()
    {
        if(count($this->grades) == 0){
            return 0;
        }

        return number_format((float)array_sum($this->grades) / count($this->grades), 2, '.', '');

    }


}