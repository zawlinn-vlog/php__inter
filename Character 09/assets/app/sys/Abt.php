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

         $res = $str->fetchAll(\PDO::FETCH_ASSOC); // FETCH_OBJ // FETCH_ASSOC //

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

    public function insertsingledata($uname, $pass){

        $str = $this->db->prepare("INSERT INTO members (username, password) VALUE (:username, :password)");

        $str->bindParam(':username', $uname);
        $str->bindParam(':password', $pass);

        $res =  $str->execute();

        echo $res ? "INSERT SUCCESSFUL" : "FAILTURE";

    }


    public function updatedata($id, $pass){
        $str = $this-> db->prepare("UPDATE members SET password=:password WHERE id=:id");

        $str->bindParam(":password", $pass);
        $str->bindParam(":id", $id);

        $res = $str->execute();

        echo $res ? "UPDATED": "FAIL";
    }

    public function deldata($id){

        $str = $this->db-> prepare("DELETE FROM members where id=:id");

        $str->bindParam(":id", $id);

        $res = $str-> execute();

        echo $res ? "DELETED" : "FAIL";

    }
}