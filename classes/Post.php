<?php

namespace classes;

class Post {
    private $postid;
    private $postresourses;
    private $description;
    private $likes;
    
    public function __construct($postid,$postresourses,$description,$likes) {
        $this->postid = $postid;
        $this->postresourses = $postresourses;
        $this->description = $description;
        $this->likes = $likes;
    }
    
    public function getResourses() {
        
    }
    
    public function getDescription() {
        
    }
}
