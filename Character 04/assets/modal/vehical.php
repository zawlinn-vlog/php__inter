<?php

// namespace assets\modal;

class Vehical{

    private $carmodel;

    public function __construct($name){
        $this->carmodel = $name;
    }

    public function getUsername(){
        return $this->carmodel;
    }
}