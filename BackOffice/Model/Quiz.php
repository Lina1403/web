<?php
	class Quiz
    {
        private $id = null;
        private $titre = null;
        private $questions = array();
        private $reponses = array();
        private $id_cours = null;
    
        public function __construct($titre, $questions, $reponses, $id_cours)
        {
            $this->titre = $titre;
            $this->questions = $questions;
            $this->reponses = $reponses;
            $this->id_cours = $id_cours;
        }
    
        public function getId()
        {
            return $this->id;
        }
    
        public function getTitre()
        {
            return $this->titre;
        }
    
        public function getQuestions()
        {
            return $this->questions;
        }
    
        public function getReponses()
        {
            return $this->reponses;
        }
    
        public function getIdCours()
        {
            return $this->id_cours;
        }
    
        public function setId(int $id)
        {
            $this->id = $id;
        }
    
        public function setTitre(string $titre)
        {
            $this->titre = $titre;
        }
    
        public function setQuestions(string $questions)
    {
        $this->questions = $questions;
    }
    
    public function setReponses(string $reponses)
    {
        $this->reponses = $reponses;
    }
    
        public function setIdCours(int $id_cours)
        {
            $this->id_cours = $id_cours;
        }
    }
    
    
?>       