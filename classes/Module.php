<?php

namespace classes;

class Module {
    private $moduleid;
    private $modulename;
    
    public function __construct($moduleid,$modulename) {
        $this->moduleid = $moduleid;
        $this->modulename = $modulename;
    }
    
    public function getModule() {
        
    }
    public function getModuleName() {
        
    }
}
