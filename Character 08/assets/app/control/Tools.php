<?php

namespace assets\app\control;

class Tools{

    public static function checkErr($db){
        echo "<pre>" . print_r($db, true) . "</pre>"; 
    }
}