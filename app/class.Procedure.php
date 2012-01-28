<?php

error_reporting(E_ALL);

/**
 * beauty_parlour - class.Procedure.php
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
 * include ProcedureLoader
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.ProcedureLoader.php');

/* user defined includes */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000086A-includes begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000086A-includes end

/* user defined constants */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000086A-constants begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000086A-constants end

/**
 * Short description of class Procedure
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Procedure
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute name
     *
     * @access private
     * @var String
     */
    private $name = null;

    /**
     * Short description of attribute length
     *
     * @access private
     * @var Integer
     */
    private $length = null;

    /**
     * Short description of attribute Id
     *
     * @access private
     * @var Integer
     */
    private $Id = null;

    // --- OPERATIONS ---

    /**
     * Short description of method _construct
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String name
     * @param  Integer length
     * @param  Integer Id
     * @return mixed
     */
    public function _construct( String $name,  Integer $length,  Integer $Id)
    {
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008CC begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008CC end
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

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008D1 begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008D1 end

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

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008D3 begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:00000000000008D3 end

        return $returnValue;
    }

} /* end of class Procedure */

?>