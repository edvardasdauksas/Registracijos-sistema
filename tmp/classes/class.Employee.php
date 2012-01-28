<?php

error_reporting(E_ALL);

/**
 * beauty_parlour - class.Employee.php
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

/**
 * include Timeslot
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Timeslot.php');

/* user defined includes */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000869-includes begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000869-includes end

/* user defined constants */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000869-constants begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000869-constants end

/**
 * Short description of class Employee
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Employee
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

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

    // --- OPERATIONS ---

    /**
     * Short description of method _construct
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String name
     * @param  String lastName
     * @param  Integer Id
     * @return mixed
     */
    public function _construct( String $name,  String $lastName,  Integer $Id)
    {
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000091D begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000091D end
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

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000926 begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000926 end

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

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000928 begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000928 end

        return $returnValue;
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

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000092A begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000092A end

        return $returnValue;
    }

    /**
     * Short description of method getFreeTimeslots
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return List<Timeslot>
     */
    public function getFreeTimeslots()
    {
        $returnValue = null;

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000092C begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000092C end

        return $returnValue;
    }

} /* end of class Employee */

?>