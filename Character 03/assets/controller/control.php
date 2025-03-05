<?php


class Control{

    public static function load(string $classname){
        require_once ("./assets/modal/".$classname.".php");
    }
}