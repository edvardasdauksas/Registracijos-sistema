<?php

error_reporting(E_ALL);

/**
 * beauty_parlour - class.User.php
 *
 * $Id$
 *
 * This file is part of beauty_parlour.
 *
 * Automatically generated on 28.01.2012, 14:46:58 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Appointment
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('class.Appointment.php');

/**
 * include AppointmentLoader
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('class.AppointmentLoader.php');

/* user defined includes */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000868-includes begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000868-includes end

/* user defined constants */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000868-constants begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000868-constants end

/**
 * Short description of class User
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class User
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute Id
     *
     * @access private
     * @var Integer
     */
    private $Id = null;

    /**
     * Short description of attribute name
     *
     * @access private
     * @var String
     */
    private $name = null;

    /**
     * Short description of attribute password
     *
     * @access private
     * @var String
     */
    private $password = null;

    /**
     * Short description of attribute lastName
     *
     * @access private
     * @var String
     */
    private $lastName = null;

    /**
     * Short description of attribute appointments
     *
     * @access private
     * @var List<Appointment>
     */
    private $appointments = null;

    /**
     * Short description of attribute email
     *
     * @access private
     * @var String
     */
    private $email = null;

    /**
     * Short description of attribute tel_number
     *
     * @access private
     * @var Integer
     */
    private $tel_number = null;

    // --- OPERATIONS ---

    /**
     * Short description of method _construct
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String name
     * @param  String lastName
     * @param  String password
     * @param  Integer Id
     * @return mixed
     */
    public function _construct( String $name,  String $lastName,  String $password,  Integer $Id)
    {
		$this->name = $name;
		$this->lastName = $lastName;
                $this->password = $password;
                $this->Id = $Id;
    }

    /**
     * Short description of method getName
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return String
     */
    public function getName()
    {
        return $name;
    }

    /**
     * Short description of method getLastName
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return String
     */
    public function getLastName()
    {
        return $lastName;
    }

    /**
     * Short description of method getPassword
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return String
     */
    public function getPassword()
    {
        return $password;
    }

    /**
     * Short description of method newAppointment
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Timestamp start
     * @param  Integer length
     * @param  String procedure
     * @param  String employee
     * @return mixed
     */
    public function newAppointment( Timestamp $start,  Integer $length,  String $procedure,  String $employee)
    {
		// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000909 begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000909 end
    }

    /**
     * Short description of method getAppointments
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return List<Appointment>
     */
    public function getAppointments()
    {
        $returnValue = null;
        return $returnValue;
    }

    /**
     * Short description of method getEmail
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return String
     */
    public function getEmail()
    {
        return $email;
    }

    /**
     * Short description of method getTel_number
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return Integer
     */
    public function getTel_number()
    {
        return $tel_number;
    }

}
?>