<?php

class StudentController

{
    public function render()
    {
        $connect = new Connection();
        $students = $connect->getAllFromTable('student');

       // return $students;
        require 'View/studentpage.php';
    }

    public function addStudent()
    {
        $connection = new Connection();
        $pdo = $connection->connect();
        $sql = "INSERT INTO " . "student". "(name, email, group_id)" ." VALUES (:name, :email, :group_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $_POST['name']);
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->bindValue(':group_id', $_POST['group']);
        $stmt->execute();
        $stmt = null;
    }

    /*public function removeStudent()
    {
        $connection = new Connection();
        $pdo = $connection->connect();
        $sql = "DELETE FROM student WHERE id= :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_POST['id']);
        $stmt->execute();
        $stmt = null;
    }*/

}
