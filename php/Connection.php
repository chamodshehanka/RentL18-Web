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
     * Connection constructor.
     * @param $_connection
     * @param string $_host
     * @param string $_username
     * @param string $_password
     * @param string $_database
     */
    public function __construct($_connection, $_host, $_username, $_password, $_database)
    {
        $this->_connection = $_connection;
        $this->_host = $_host;
        $this->_username = $_username;
        $this->_password = $_password;
        $this->_database = $_database;
    }

    /**
     * @return mixed
     */
    public function getConnection()
    {
        return $this->_connection;
    }

    /**
     * @param mixed $connection
     */
    public function setConnection($connection)
    {
        $this->_connection = $connection;
    }

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        return self::$_instance;
    }

    /**
     * @param mixed $instance
     */
    public static function setInstance($instance)
    {
        self::$_instance = $instance;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->_host;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->_host = $host;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }

    /**
     * @return string
     */
    public function getDatabase()
    {
        return $this->_database;
    }

    /**
     * @param string $database
     */
    public function setDatabase($database)
    {
        $this->_database = $database;
    }


}