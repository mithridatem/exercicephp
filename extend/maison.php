<?php
    class Maison{
        /*------------------------------------
                    Attributs         
        ------------------------------------*/
        private $nom;
        private $longueur;
        private $largeur;
        
        /*------------------------------------
                   Construteur         
        ------------------------------------*/
        public function __construct($name, $long, $larg){
            $this->nom = $name;
            $this->longueur = $long;
            $this->largeur = $larg;
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
        
        public function setNom($name){
            $this->nom = $name;
        }
        public function setLargeur($larg){
            $this->largeur = $larg;
        }
        public function setLongueur($long){
            $this->longueur = $long;
        }
       
        /*------------------------------------
                        Méthodes         
        ------------------------------------*/
        public function surface(){
            return $this->largeur * $this->longueur;
        }
    }

?>