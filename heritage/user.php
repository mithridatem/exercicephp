<?php
    class User{
        private $nom;
        private $prenom;
        private $mail;
        private $password;

        public function __construct($name, $firstName, $email, $pwd){
            $this->nom = $name;
            $this->prenom = $firstName;
            $this->mail = $email;
            $this->password = $pwd;
        }
        public function getNom(){
            return $this->nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function getMail(){
            return $this->mail;
        }
        public function getPassword(){
            return $this->password;
        }
        public function setNom($name){
            $this->nom = $name;
        }
        public function setPrenom($firstName){
            $this->prenom = $firstName;
        }
        public function setMail($email){
            $this->mail = $email;
        }
        public function setPassword($pwd){
            $this->password = $pwd;
        }
        public function showUser(){
            return "Compte : ".$this->nom;
        }
    }



?>