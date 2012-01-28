<?php

error_reporting(E_ALL);

/**
 * beauty_parlour - class.Timeslot.php
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
 * include Employee
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Employee.php');

/* user defined includes */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000092F-includes begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000092F-includes end

/* user defined constants */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000092F-constants begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000092F-constants end

/**
 * Short description of class Timeslot
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Timeslot
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute start
     *
     * @access private
     * @var Timestamp
     */
    private $start = null;

    /**
     * Short description of attribute length
     *
     * @access private
     * @var Integer
     */
    private $length = null;

    // --- OPERATIONS ---

    /**
     * Short description of method _construct
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Timestamp start
     * @param  Integer length
     * @return mixed
     */
    public function _construct( Timestamp $start,  Integer $length)
    {
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000936 begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:0000000000000936 end
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

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000093A begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000093A end

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

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000093C begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000093C end

        return $returnValue;
    }

} /* end of class Timeslot */

?>