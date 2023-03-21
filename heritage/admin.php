<?php
    class Admin extends User{
        private $age;
        private $ban = [];
        public function __construct($name, $firstName, $email, $pwd, $age){
            $this->age = $age;
            parent::__construct($name, $firstName, $email, $pwd);
        }
        public function test(){
            return $this->getNom();
        }
        /* public function showUser(){
            return "Compte : ".strtoupper($this->getNom());
        } */
        public function showUser(){
            return strtoupper(parent::showUser());
        }
        //methode pour ban des users
        public function banUser($user){
            $this->ban[] = $user;  
        }
        //méthode pour afficher l'utilisateur qui est ban
        public function showBanUser(){
            foreach ($this->ban as $value) {
                echo '<p> l\'utilisateur : '.$value->getNom().' est ban</p>';
            }
        }
    }
?>