<?php

require_once "./vendor/autoload.php";

use assets\app\sys\Abt;

class Main{

    private $db;

    public function __construct(){

       $data = new Abt();


       $data->getsingledata(4);

       
              

    }


}

new Main;

