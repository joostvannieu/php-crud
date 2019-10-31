<?php

class StudentController

{
    public function render()
    {
        require 'View/studentpage.php';

        $connect =new Connection();
        $students = $connect->getAllFromTable('student');

        return $students;
    }
}
