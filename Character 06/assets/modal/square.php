<?php

namespace assets\modal;
use assets\modal\inter\Shape;


class Square implements Shape{

    private $widht, $height; 

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(){
        return $this->width * $this-> height;
    }
}