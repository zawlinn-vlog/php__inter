<?php


namespace assets\App\Auth;


class Auth{

    public $firstname, $lastname;

    public function __construct($fname, $lname){
        $this->firstname = $fname;
        $this->lastname = $lname;
    }
}