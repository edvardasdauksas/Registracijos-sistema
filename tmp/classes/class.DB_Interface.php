<?php

error_reporting(E_ALL);

/**
 * beauty_parlour - class.DB_Interface.php
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
 * include ProcedureLoader
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.ProcedureLoader.php');

/* user defined includes */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000086F-includes begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000086F-includes end

/* user defined constants */
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000086F-constants begin
// section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000086F-constants end

/**
 * Short description of class DB_Interface
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class DB_Interface
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute dbName
     *
     * @access private
     * @var String
     */
    private $dbName = null;

    /**
     * Short description of attribute password
     *
     * @access private
     * @var String
     */
    private $password = null;

    // --- OPERATIONS ---

    /**
     * Short description of method _construct
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String name
     * @param  String password
     * @return mixed
     */
    public function _construct( String $name,  String $password)
    {
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000094B begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000094B end
    }

    /**
     * Short description of method executeQuery
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String query
     * @return Table
     */
    public function executeQuery( String $query)
    {
        $returnValue = null;

        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000094F begin
        // section -64--88-56-1--7ac797d2:1350469f2e6:-8000:000000000000094F end

        return $returnValue;
    }

} /* end of class DB_Interface */

?>