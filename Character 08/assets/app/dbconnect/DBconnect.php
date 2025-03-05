<?php

namespace assets\app\dbconnect;

use assets\app\control\Tools;

class DBconnect{

    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_NAME = 'myshop';

    private $conn; 
    private static $instance;

    private function __construct(){

        $this-> conn = new \mysqli(self:: DB_HOST, self:: DB_USER, self:: DB_PASS, self:: DB_NAME);

        // Tools::chkErr($this->conn);
    }

    public static function getConnect(){
        if(!self::$instance){
            self::$instance = new DBconnect();
        }

        return self::$instance;
    }

    public function getdb(){
        return $this-> conn;
    }

}