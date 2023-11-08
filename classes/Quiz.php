<?php

namespace classes;

class Quiz {
    private $quizid;
    private $quiztitle;
    private $quizresourses;
    private $score;
    private $tokenstatus;
      
    public function __construct($quizid,$quiztitle,$quizresourses,$score,$tokenstatus) {
        $this->quizid = $quizid;
        $this->quiztitle = $quiztitle;
        $this->quizresourses = $quizresourses;
        $this->score = $score;
        $this->tokenstatus = $tokenstatus;
    }
    
    public function getQuizId() {
        
    }
    public function getQuizTitle() {
        
    }
    public function getQuizResourses() {
        
    }
    public function generateScore() {
        
    }
    public function manageTokenStatus() {
        
    }
}
