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
require_once('class.Appointment.php');

/**
 * include AppointmentLoader
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.AppointmentLoader.php');

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
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008FE begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008FE end
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
        $returnValue = null;

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000903 begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000903 end

        return $returnValue;
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
        $returnValue = null;

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000905 begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000905 end

        return $returnValue;
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
        $returnValue = null;

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000907 begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000907 end

        return $returnValue;
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

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000091B begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000091B end

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
        $returnValue = null;

        // section 84-46--7-77-6bcc67a9:13523e9c018:-8000:0000000000000A5F begin
        // section 84-46--7-77-6bcc67a9:13523e9c018:-8000:0000000000000A5F end

        return $returnValue;
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
        $returnValue = null;

        // section 84-46--7-77-6bcc67a9:13523e9c018:-8000:0000000000000A61 begin
        // section 84-46--7-77-6bcc67a9:13523e9c018:-8000:0000000000000A61 end

        return $returnValue;
    }

} /* end of class User */

?>