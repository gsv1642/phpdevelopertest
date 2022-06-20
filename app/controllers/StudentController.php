<?php

namespace app\controllers;

use app\classes\Request;

class StudentController
{
    public static function getStudent(Request $request)
    {
        $student_id = $request->get('student');

        return 'This is student controller ' . $student_id;
    }
}