<?php
    class Maison{
        /*------------------------------------
                    Attributs         
        ------------------------------------*/
        private $nom;
        private $longueur;
        private $largeur;
        private $etage;

        /*------------------------------------
                   Construteur         
        ------------------------------------*/
        public function __construct($name, $long, $larg, $etage){
            $this->nom = $name;
            $this->longueur = $long;
            $this->largeur = $larg;
            $this->etage = $etage;
        }
        /*------------------------------------
                   Getter and Setter         
        ------------------------------------*/
        public function getNom(){
            return $this->nom;
        }
        public function getLongeur(){
            return $this->longueur;
        }
        public function getLargeur(){
            return $this->largeur;
        }
        public function getEtage(){
            return $this->etage;
        }
        public function setNom($name){
            $this->nom = $name;
        }
        public function setLargeur($larg){
            $this->largeur = $larg;
        }
        public function setLongueur($long){
            $this->longueur = $long;
        }
        public function setEtage($etage){
            $this->etage = $etage;
        }
        /*------------------------------------
                        Méthodes         
        ------------------------------------*/
        public function surface(){
            return $this->largeur * $this->longueur*$this->etage;
        }
        public function __toString(){
            return $this->nom;
        }
        public static function test(){
            return "ceci est une fonction statique";
        }
    }
?>