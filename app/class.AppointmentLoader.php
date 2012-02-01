<?php

error_reporting(E_ALL);

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

require_once('class.Appointment.php');
require_once('class.DB_Interface.php');
require_once('class.Employee.php');
require_once('class.User.php');

class AppointmentLoader
{

    private $database = null;

    public function _construct( DB_Interface $database)
    {
        $this->database = $database;
    }

    public function getUserAppointments($userId)
    {
        echo 'dude';
    }

    public function getEmployeeAppointments($employeeId)
    {
        echo 'dude';
    }

    
    public function appointmentsListHereOrSomething()
    {
        
    }

}

?>