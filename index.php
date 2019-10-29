<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here
require 'Model/User.php';
require 'Model/Teacher.php';
require 'Model/Student.php';
require 'Model/Group.php';
require 'Model/Appointment.php';
require 'Model/Connection.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/GroupController.php';
require 'Controller/StudentController.php';
require 'Controller/TeacherController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$controller = new HomepageController();
$controller->render($_GET, $_POST);