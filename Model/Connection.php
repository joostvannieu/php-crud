<?php


class Connection
{
    function openConnection() : PDO {
        $dbhost    = "localhost";
        $dbuser    = "root";
        $dbpass    = "junior";
        $db        = "php_crud";

        $pdo = new PDO('mysql:host='. $dbhost . ';dbname='. $db , $dbuser, $dbpass);

        return $pdo;
    }
}