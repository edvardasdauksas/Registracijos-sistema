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
    public function __construct($name, $length, $Id)
    {
        $this->name = $name;
		$this->length = $length;
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
        return $this->name;
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
        return $this->length;
    }

} /* end of class Procedure */

?>