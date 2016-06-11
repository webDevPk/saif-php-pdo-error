<?php
class Database
{
    private $_connection;
    private static $_instance; 
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'stack';

    public static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct()
    {
        try {
            $this->_connection  = new \PDO("mysql:host=$this->_host;dbname=$this->_database", $this->_username, $this->_password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    private function __clone()
    {
    }
    
    public function getConnection()
    {
        return $this->_connection;
    }
}

