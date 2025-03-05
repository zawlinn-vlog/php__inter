<?php


namespace assets\app\control;

use assets\app\control\Tools;
use assets\app\dbconnect\DBconnect;

class Adl{

    private $db; 

    public function __construct(){

        $this->db = DBconnect::getConnect()->getdb();

    }


    public function getsingledata($id){

        // Tools::chkErr($this-> db);


        $str = $this->db->prepare("SELECT * FROM members WHERE id=?");

        $str->bind_param('i', $id);

        $res = $str->execute();

        $data = $str->get_result();

        // $str->bind_result($id, $username, $password);


        while($row = $data->fetch_assoc()){

            Tools::chkErr($row);
          
            echo $row['username'];
        }

        

        
    }

}