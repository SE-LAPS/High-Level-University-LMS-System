<?php

namespace classes;

class Admin {
    private $adminid;
    private $name;
    private $email;
    private $username;
    private $password;
    
    public function __construct($adminid,$name,$email,$username,$password) {
        $this->adminid = $adminid;
        $this->name = $name;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }
    
    public function manageUser() {
        
    }
    public function manageSkill() {
        
    }
    public function manageModule() {
        
    }
    public function managePost() {
        
    }
    public function manageTutorRequest() {
        
    }
}
