<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/2/2018
 * Time: 7:08 PM
 */

class Connection{
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
        try{
            $this->_connection = new PDO(
                'mysql:host='.$this->_host.';dbName='.$this->_database,
                $this->_username, $this->_password
            );
            $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $exception){
            die("Failed to connect to DB : ". $exception->getMessage());
        }
    }

    /**
     * @param mixed
    */
    private function __clone(){}

    /**
     * @param mixed $connection
     */
    public function setConnection($connection)
    {
        $this->_connection = $connection;
    }

    /**
     * @return PDO
     */
    public function getConnection()
    {
        return $this->_connection;
    }
}

$db = Connection::getInstance();
$conn = $db->getConnection();