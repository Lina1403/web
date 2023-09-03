<?php
	class Cours
    {
        private $id = null;
        private $titre = null;
        private $description = null;
        private $id_user = null;
    
        public function __construct($titre, $description, $id_user)
        {
            $this->titre = $titre;
            $this->description = $description;
            $this->id_user = $id_user;
        }
    
        public function getId()
        {
            return $this->id;
        }
    
        public function getTitre()
        {
            return $this->titre;
        }
    
        public function getDescription()
        {
            return $this->description;
        }
    
        public function getIdUser()
        {
            return $this->id_user;
        }
    
        public function setId(int $id)
        {
            $this->id = $id;
        }
    
        public function setTitre(string $titre)
        {
            $this->titre = $titre;
        }
    
        public function setDescription(string $description)
        {
            $this->description = $description;
        }
    
        public function setIdUser(int $id_user)
        {
            $this->id_user = $id_user;
        }
    }
    
?>       