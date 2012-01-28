<?php

error_reporting(E_ALL);

/**
 * beauty_parlour - class.Appointment.php
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
 * include AppointmentLoader
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.AppointmentLoader.php');

/**
 * include Employee
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Employee.php');

/**
 * include Procedure
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Procedure.php');

/**
 * include User
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.User.php');

/* user defined includes */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000867-includes begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000867-includes end

/* user defined constants */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000867-constants begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000867-constants end

/**
 * Short description of class Appointment
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Appointment
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute Id
     *
     * @access private
     * @var Integer
     */
    private $Id = null;

    /**
     * Short description of attribute start
     *
     * @access private
     * @var Timestamp
     */
    private $start = null;

    /**
     * Short description of attribute procedure
     *
     * @access private
     * @var Procedure
     */
    private $procedure = null;

    // --- OPERATIONS ---

    /**
     * Short description of method _construct
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Timestamp start
     * @param  Procedure procedure
     * @param  Integer Id
     * @return mixed
     */
    public function _construct( Timestamp $start,  Procedure $procedure,  Integer $Id)
    {
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008E3 begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008E3 end
    }

    /**
     * Short description of method getStart
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return Timestamp
     */
    public function getStart()
    {
        $returnValue = null;

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008E8 begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008E8 end

        return $returnValue;
    }

    /**
     * Short description of method getProcedureName
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return String
     */
    public function getProcedureName()
    {
        $returnValue = null;

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008EA begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008EA end

        return $returnValue;
    }

    /**
     * Short description of method getLength
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return Integer
     */
    public function getLength()
    {
        $returnValue = null;

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008EC begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008EC end

        return $returnValue;
    }

} /* end of class Appointment */

?>