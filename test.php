<?php
    class User{
        /*--------------------------------
                    Attributs
        ---------------------------------*/
        private $nom;
        private $prenom;
        /*--------------------------------
                Constructeur
        ---------------------------------*/
        public function __construct($name, $firstName){
            $this->nom = $name;
            $this->prenom = $firstName;
        }
        /*--------------------------------
                Getters et Setters
        ---------------------------------*/
        public function getNom(){
            return $this->nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function setNom($name){
            $this->nom = $name;
        }
        public function setPrenom($firstName){
            $this->prenom = $firstName;
        }
        /*--------------------------------
                    Méthodes
        ---------------------------------*/
        public function afficherDetail(){
            return strtoupper($this->nom)." , ".strtoupper($this->prenom);
        }
    }
?>