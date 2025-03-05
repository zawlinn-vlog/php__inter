<?php

namespace assets\modal;

use assets\modal\inter\Shape;

class Circle implements Shape{

    private $radius; 

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function getArea(){
        return (2 * 3.14) * $this->radius;
    }
}
