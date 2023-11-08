<?php

namespace classes;

class Resourses {
    private $resourseoid;
    private $resoursename;
    private $description;
    private $resoursefile;
      
    public function __construct($resourseoid,$resoursename,$description,$resoursefile) {
        $this->resourseoid = $resourseoid;
        $this->resoursename = $resoursename;
        $this->description = $description;
        $this->resoursefile = $resoursefile;
    }
    
    public function manageResourses() {
        
    }
   
}
