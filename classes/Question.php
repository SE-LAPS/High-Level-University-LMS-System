<?php

namespace classes;

class Question {
    private $questionoid;
    private $question;
    private $questionresourses;
    private $answer;
      
    public function __construct($questionoid,$question,$questionresourses,$answer) {
        $this->questionoid = $questionoid;
        $this->question = $question;
        $this->questionresourses = $questionresourses;
        $this->answer = $answer;
    }
    
    public function getQuestionId() {
        
    }
    public function getQuestion() {
        
    }
    public function getQuestionresourses() {
        
    }
    public function getAnswer() {
        
    }
    
}
