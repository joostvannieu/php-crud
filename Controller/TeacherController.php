<?php


class TeacherController
{

    public function render()
    {
        $connect= new Connection();
        $allTeachers = $connect->getAllFromTable('teacher');
        $teachers = [];
        foreach ($allTeachers as $row){

            $teacher = new Teacher($row['name'],$row['email']);
            $teachers[]= $teacher;
        }
        require 'View/teacherpage.php';
    }
}

