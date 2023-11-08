<?php

namespace classes;

class Skill {

    private $skillid;
    private $skillname;
    private $description;

    public function __construct($skillid, $skillname, $description) {
        $this->skillid = $skillid;
        $this->skillname = $skillname;
        $this->description = $description;
    }

    public function getSkill() {
        
    }

    public function getSkillDescription() {
        
    }

}
