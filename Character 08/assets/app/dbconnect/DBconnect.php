<?php
    

namespace assets\app\dbconnect;

class DBconnect{

    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_NAME = 'myshop';

    private $db;

    public function __construct(){
        $this-> db = new \mysqli(self::DB_HOST, self:: DB_USER, self::DB_PASS, self::DB_NAME);
       

    }
}