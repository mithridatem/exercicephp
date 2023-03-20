<?php
    class Animal{
        /*------------------------------------
                    Attributs         
        ------------------------------------*/
        public $nom;
        private $taille;
        private $poid;
        private $sexe;
        /*------------------------------------
                   Construteur         
        ------------------------------------*/
        public function __construct($name, $size, $weight, $sexe){
            $this->nom = $name;
            $this->taille = $size;
            $this->poid = $weight;
            $this->sexe = $sexe;
        }
        /*------------------------------------
                   Getter and Setter         
        ------------------------------------*/
        public function getNom(){
            return $this->nom;
        }
        public function getTaille(){
            return $this->taille;
        }
        public function getPoid(){
            return $this->poid;
        }
        public function getSexe(){
            return $this->sexe;
        }
        public function setNom($name){
            $this->nom = $name;
        }
        public function setTaille($taille){
            $this->taille = $taille;
        }
        public function setPoid($poid){
            $this->poid = $poid;
        }
        public function setSexe($sexe){
            $this->sexe = $sexe;
        }
        /*------------------------------------
                    Méthodes         
        ------------------------------------*/
        public function crier(){
            //si le nom est chien
            if($this->nom == 'chien' OR $this->nom == 'Chien' ){
                echo 'Waouff<br>';
            }
            //sinon si le nom est chat
            else if($this->nom == 'chat'OR $this->nom == 'Chat' ){
                echo 'Miaou<br>';
            }
            //sinon
            else{
                echo 'Grrr';
            }
        }
    }
?>