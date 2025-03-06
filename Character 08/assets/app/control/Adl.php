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

    public function insertsingledata($uname, $pass){
        $str = $this->db-> prepare("INSERT INTO members (username, password) VALUE (?,?)");

        $str->bind_param('ss', $uname, $pass);

        $res = $str->execute();

        echo $res ? "Insert SuccessFul" : "Insert Failure";
    }


    public function insertmulti(){

        $ary = [
            ['Zawlinn', "Oxford@317"],
            ['Saram', 'Havard@317'],
            ['Abbas', 'Oxford@317']
        ];

        // var_dump($ary);

        $str = $this->db->prepare("INSERT INTO members (username, password) VALUES (?,?)");

        foreach($ary as $val){

            // var_dump($val);

            $str->bind_param('ss',$val[0], $val[1]);

            $res = $str-> execute();

            echo $str->insert_id;
        }
    }

    public function singledel($id){
        $str = $this->db->prepare("DELETE FROM members WHERE id=?");


        $str->bind_param('i', $id);

        $res = $str->execute();

        echo $res ? 'DEL success' : 'Del Fail';
    }

}