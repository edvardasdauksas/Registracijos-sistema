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
 * include Procedure
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Procedure.php');

/**
 * Short description of class Appointment
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Appointment
{

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
    public function __construct($start, Procedure $procedure, $Id)
    {
        $this->start = $start;
		$this->procedure = $procedure;
		$this->Id = $Id;
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
        return $this->start;
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
        return $this->procedure->getName();
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
        return $this->procedure->getLength();
    }

} /* end of class Appointment */

?>