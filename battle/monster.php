<?php
    class Monster{
        /*-------------------------------------
                    Attributs
        -------------------------------------*/
        private $name;
        private $life;
        private $attack;
        /*-------------------------------------
                    Constructeur
        -------------------------------------*/
        public function __construct(){}
        /*-------------------------------------
                    Getters et Setters
        -------------------------------------*/
        public function getName(){
            return $this->name;
        }
        public function getLife(){
            return $this->life;
        }
        
        public function getAttack(){
            return $this->attack;
        }
        
    }


?>