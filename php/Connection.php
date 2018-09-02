<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/2/2018
 * Time: 7:08 PM
 */

class Connection
{
    private $_connection;
    private static $_instance;
    private $_host = "HOST";
    private $_username = "USERNAME";
    private $_password = "PASSWORD";
    private $_database = "DATABASE";

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if (!self::$_instance){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        $this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

        // Exception handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to connect to to MySQL: " . mysqli_connect_error(), E_USER_ERROR);
        }
    }

    /**
     * @param mixed
    */
    private function __clone()
    {
        //
    }

    /**
     * @param mixed $connection
     */
    public function setConnection($connection)
    {
        $this->_connection = $connection;
    }
}