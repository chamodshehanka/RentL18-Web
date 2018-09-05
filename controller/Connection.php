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
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "wampwamp";
    private $_database = "rentlioweb";

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
                'mysql:host='.$this->_host.';dbname='.$this->_database,
                $this->_username, $this->_password
            );
            $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            ?><script>
                console.log("Connection created!");
            </script> <?php
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