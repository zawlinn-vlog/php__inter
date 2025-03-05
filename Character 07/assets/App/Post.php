<?php

namespace assets\App;

use assets\App\Auth\Auth;

class Post {

    private $author, $content;

    public function __construct(Auth $auth,string $content){
        $this->author = $auth;

        $this-> content = $content;
    }

    public function getPost(){
        return "This post is written by " . $this-> author-> firstname . " and his content is &mdash; " . $this-> content;
    }

    

}