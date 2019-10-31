<?php


class TeacherController
{

    public function render()
    {
        $connect= new Connection();
        $allTeachers = $connect->getAllFromTable('teacher');
        $teachers = [];
        foreach ($allTeachers as $row){

            $teacher = new Teacher($row['id'],$row['name'],$row['email']);
            $teachers[]= $teacher;
        }
        require 'View/teacherpage.php';
    }

    public function deleteTeacher():void {
        if (isset($_POST['delete'])){
            $connect = new Connection();
            $deleteRow = $connect->deleteRecord('teacher',$_POST['id']);
        } else {
            echo 'Delete failed';
        }
        require 'View/teacherpage.php';
    }
}

