<?php


namespace assets\app\db;


class DBGEN{

    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_NAME = 'myshop';

    private $conn;

    private static $instance;

    private function __construct(){
        try{

            $this->conn = new \PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME,self::DB_USER, self::DB_PASS);

            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);


            if($this->conn) {
                echo "Connnection is established successfully!";

                var_dump($this->conn);
            }

        }
        catch(Exception $e){
            echo $e-> getMessage();
        }


    }

    public static function getInstance(){

        if(!self::$instance){
            self::$instance = new DBGEN();
        }

        return self::$instance;
    }


    public function getConnect(){
        return $this->conn;
    }
}