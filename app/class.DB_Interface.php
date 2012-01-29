<?php

error_reporting(E_ALL);

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

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
    private $host = null;
    private $username = null;
    private $password = null;
    private $db_name = null;
    private $pdo = null;
    private $smtm = null;
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
    public function __construct( $host, $username, $password, $db_name )
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
        try {
            $this->pdo = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
            $this->pdo->exec("SET NAMES 'utf8' COLLATE 'utf8_bin'");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            print_r("object created");
        } catch (PDOException $err) {
            print_r($err->getMessage());
        }
    }
    public function __destructor()
    {
        $this->pdo = null;
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
        //not that functional yet
        $returnValue = null;
        $this->smtm = $this->pdo>prepare($query);
        $returnValue = $this->smtm->execute();
        return $returnValue;
    }

} /* end of class DB_Interface */

?>