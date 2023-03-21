<?php
    class Vehicule{
        /*-------------------------------------
                    Attributs
        -------------------------------------*/
        private $nomVehicule;
        private $nbrRoue;
        private $vitesse;
        /*-------------------------------------
                    Constructeur
        -------------------------------------*/
        public function __construct($name, $nbr, $speed){
            $this->nomVehicule = $name;
            $this->nbrRoue = $nbr;
            $this->vitesse = $speed;
        }
        /*-------------------------------------
                    Getters et Setters
        -------------------------------------*/
        public function getNomVehicule(){
            return $this->nomVehicule;
        }
        public function getNbrRoue(){
            return $this->nbrRoue;
        }
        public function getVitesse(){
            return $this->vitesse;
        }
        public function setNomVehicule($name){
            $this->nomVehicule = $name;
        }
        public function setNbrRoue($nbr){
            $this->nbrRoue = $nbr;
        }
        public function setVitesse($speed){
            $this->vitesse = $speed;
        }
        /*-------------------------------------
                    Méthodes
        -------------------------------------*/
        //méthode qui renvoi le type de véhicule d'un objet Vehicule
        public function detect(){
            //condition teste le nbr de roue = 2
            if($this->nbrRoue == 2){
                return "Moto";
            }
            //condition teste le nbr de roue = 4
            else if($this->nbrRoue == 4){
                return "Voiture";
            }
            //test si différent (autre)
            else{
                return "Pas vehicule";
            }
        }
        //méthode qui ajoute 50 à la vitesse courante d'un objet Vehicule
        public function boost(){
            $this->vitesse += 50;
        }
        //méthode qui va comparer la vitesse de 2 objets
        public function plusVite($obj){
            //test comparer si l'objet courant est plus rapide que celui en paramétre
            if($this->vitesse > $obj->getVitesse()){
                return $this->nomVehicule;
            }
            //test sinon affiche le nom de l'autre véhicule ($obj)
            else{
                //return $obj->getNomVehicule();
                return $obj->nomVehicule;
            }
        }
        //méthode version statique
        public static function plusViteV2($obj1, $obj2){
            if($obj1->vitesse > $obj2->vitesse){
                return $obj1->nomVehicule;
            }
            else{
                return $obj2->nomVehicule;
            }
        }
    }
?>