<?php

error_reporting(E_ALL);

/**
 * beauty_parlour - class.AppointmentLoader.php
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
 * include DB_Interface
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.DB_Interface.php');

/**
 * include Employee
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Employee.php');

/**
 * include User
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.User.php');

/* user defined includes */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000086B-includes begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000086B-includes end

/* user defined constants */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000086B-constants begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000086B-constants end

/**
 * Short description of class AppointmentLoader
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class AppointmentLoader
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute database
     *
     * @access private
     * @var DB_Interface
     */
    private $database = null;

    // --- OPERATIONS ---

    /**
     * Short description of method _construct
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  DB_Interface database
     * @return mixed
     */
    public function _construct( DB_Interface $database)
    {
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000956 begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000956 end
    }

    /**
     * Short description of method getUserAppointments
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Integer userId
     * @return List<Appointment>
     */
    public function getUserAppointments( Integer $userId)
    {
        $returnValue = null;

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000959 begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000959 end

        return $returnValue;
    }

    /**
     * Short description of method getEmployeeAppointments
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Integer employeeId
     * @return mixed
     */
    public function getEmployeeAppointments( Integer $employeeId)
    {
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000095C begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000095C end
    }

    /**
     * Short description of method List<Appointment>
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function List<Appointment>()
    {
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000095F begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000095F end
    }

} /* end of class AppointmentLoader */

?>