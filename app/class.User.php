<?php

error_reporting(E_ALL);

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

require_once('class.AppointmentLoader.php');

class User
{
   
    private $Id = null;
    private $name = null;
    private $password = null;
    private $lastName = null;
    private $appointments = null;
    private $email = null;
    private $tel_number = null;
    
    public function __construct($Id, $name, $lastName, $password, $email, $tel_number)
    {
		if(isset($Id)) {
            $this->Id = $Id;
            $appointmentLoader = new AppointmentLoader();   
            $this->appointments = $appointmentLoader->getUserAppointments($Id); 
        } 
        
        $this->name = $name;
		$this->lastName = $lastName;
        $this->password = $password;
        $this->email = $email;
        $this->tel_number  = $tel_number;       
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function newAppointment($start, $length, $procedure, $employee)
    {
        
    }

    public function getAppointments()
    {
        return $this->appointments;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getTel_number()
    {
        return $this->tel_number;
    }
    
    public function getId()
    {
        return $this->Id;
    }

}
?>