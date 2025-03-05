<?php

namespace assets\modal;

class Person{

    private $username;

    public function __construct($name){
        $this->username = $name;
    }

    public function getUsername(){
        return $this->username;
    }

}