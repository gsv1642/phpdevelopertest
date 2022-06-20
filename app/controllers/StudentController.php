<?php

namespace app\controllers;

use app\classes\Application;
use app\classes\CSM;
use app\classes\CSMB;
use app\classes\Request;
use app\classes\Student;

class StudentController
{
    public static function getStudent(Request $request)
    {
        $student_id = $request->get('student');

        if($student_id){
            $student = self::findUser($student_id);
            if(!is_null($student['id'])){

                if($student['type'] == Student::CSM_TYPE){
                    $stud = new CSM($student);
                }else{
                    $stud = new CSMB($student);
                }
                return $stud->show();
            }
        }
        header('Content-type: text/html');
        return 'NO DATA';

    }

    public static function findUser($id)
    {
        $sql = 'SELECT students.id, firstname, lastname, type, GROUP_CONCAT(grades.grade) as grades FROM students 
                left join grades on grades.student_id = students.id
                where students.id = ?';

        $query = Application::$app->database->pdo->prepare($sql);
        $query->execute([$id]);
        $student = $query->fetch();

        return $student;
    }
}