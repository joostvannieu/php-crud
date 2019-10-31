<?php



class Connection
{

    public function connect (){
        require 'config.php';
        $pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        return $pdo;
    }

    public function getAllFromTable (string $table) : array {
        $pdo = $this->connect();
        $sql = "SELECT * FROM `" . $table ."`";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRowFromTableById (string $table, int $id) : array {
        $pdo = $this->connect();
        $sql = "SELECT * FROM `" . $table . "` WHERE id=$id";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    /*    public function getAllStudent (){
        $pdo=$this->Connect();
        $result=$pdo->prepare("SELECT * FROM student");
        $result->execute();
        $data =$result->fetchAll(PDO::FETCH_ASSOC);
        $students = [];
        foreach ($data as $row){
            $student = new Student($row['name'], $row['email'],$row['group_id']);
            $students[]= $student;
        }

        var_dump($students);
    }

    public function getAllTeacher(){
        $pdo=$this->Connect();
        $result=$pdo->prepare("SELECT * FROM teacher");
        $result->execute();
        $data =$result->fetchAll(PDO::FETCH_ASSOC);
        $teachers = [];
        foreach ($data as $row){

            $teacher = new Teacher($row['name'],$row['email']);
            $teachers[]= $teacher;

        }

        var_dump($teachers);
    }

    public function getAllGroup(){
        $pdo=$this->Connect();
        $result=$pdo->prepare("SELECT * FROM `group`");
        $result->execute();
        $data =$result->fetchAll(PDO::FETCH_ASSOC);
        $groups = [];
        foreach ($data as $row){

            $group = new Group($row['name'],$row['location']);
            $groups[]= $group;

        }

        var_dump($groups);
    }*/

}

