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

   /* public function addStudent(array $_GET)
    {
        $connection = new Connection();
        $pdo = $connection->connect();
        $sql = "INSERT INTO " . "student". "(name, email, group_id)" ." VALUES (:name, :email, :group_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $_GET['name']);
        $stmt->bindValue(':email', $_GET['email']);
        $stmt->bindValue(':group_id', $_GET['group']);
        $stmt->execute();
        $stmt = null;
    }*/

}
