<?php

namespace classes;

class Portfolio {
    private $portfolioid;
    private $name;
    private $skills;
    private $description;
    private $email;
    private $profilepicture;
    
    public function __construct($portfolioid,$name,$skills,$description,$email,$profilepicture) {
        $this->portfolioid = $portfolioid;
        $this->name = $name;
        $this->skills = $skills;
        $this->description = $description;
        $this->email = $email;
        $this->profilepicture = $profilepicture;
    }
    
    public function getName() {
        
    }
    public function getSkills() {
        
    }
    public function getDescription() {
        
    }
    public function getEmail() {
        
    }
    public function getPhoneNo() {
        
    }
    public function getProfilePicture() {
        
    }
}
