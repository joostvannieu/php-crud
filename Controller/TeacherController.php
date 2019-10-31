<?php


class TeacherController
{

    public function render()
    {
        require 'View/teacherpage.php';
        $connect= new Connection();
        $teacher = $connect->getAllFromTable('teacher');
        return $teacher;

    }
}

