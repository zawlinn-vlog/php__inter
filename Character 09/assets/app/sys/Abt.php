<?php

namespace assets\app\sys;

use assets\app\db\DBGEN;

class Abt{
    private $db;

    public function __construct(){

        $this->db = DBGEN::getInstance()->getConnect();

    }


    public function getsingledata($id){


        $str = $this->db->prepare("SELECT * FROM members WHERE id=:id");

        $str->bindParam(':id', $id);

         $str->execute();

         $res = $str->fetchAll(\PDO::FETCH_ASSOC);

        //  echo $res['username'];


        foreach($res as $val){
            echo $val['username'];
        }


        // var_dump($res);

        // $str->bindColumn('username', $username);
        // $str->bindColumn('password', $pass);

        // while($str->fetchObject()){
        //     echo $username;
        //     echo $pass;
        // }

        
        
    }
}