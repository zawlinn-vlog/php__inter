<?php

require_once "./vendor/autoload.php";

use assets\app\sys\Abt;

class Main{

    private $db;

    public function __construct(){

       $data = new Abt();


       $data->getsingledata(1);

    //    $data-> insertsingledata('Saram', "Havard@317");

    // $data-> updatedata(3, 'Microphone@317');

    $data->deldata(3);
              

    }


}

new Main;

