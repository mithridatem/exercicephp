<?php
    class Immeuble extends Maison{
        /*------------------------------------
                    Attributs         
        ------------------------------------*/
        private $etage;
        /*------------------------------------
                   Construteur         
        ------------------------------------*/
        public function __construct($etage){
            $this->etage = $etage;
        }
        /*------------------------------------
                   Getter and Setter         
        ------------------------------------*/
        public function getEtage(){
            return $this->etage;
        }   
        public function setEtage($etage){
            $this->etage = $etage;
        }
        /*------------------------------------
                    Méthodes         
        ------------------------------------*/
        public function surface(){
            return $this->getLongeur()*$this->getLargeur()*$this->etage;
        }
    }
?>