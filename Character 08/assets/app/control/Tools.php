<?php

namespace assets\app\control;

class Tools{

    public static function chkErr($obj){
        echo "<pre>" . print_r($obj, true) . "</pre>";
    }
}