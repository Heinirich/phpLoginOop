<?php

include "configure.php";
/**
 * Database
 */
class Database
{
    private $db;

    private static $instance;
        
    /**
     * __construct
     *Database Connection
     * @return void
     */
    private function __construct(){
        $this->db = new mysqli(Configure::$host,Configure::$user,Configure::$password,Configure::$database);
        if( mysqli_connect_errno()){
            echo "Database Connection error".mysqli_connect_errono();
            exit();
        }
        return true;
      
    }    
    /**
     * instance
     *
     * @return void
     */
    public static function instance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$db = Database::instance(); 

