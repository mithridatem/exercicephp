<?php
    //importe fichiers (classe User)
    include './test.php';
    //instancier un nouvel utilisateur

    $utilisateur = new User('Mithridate', 'mathieu');
    var_dump($utilisateur);
    echo '<br>';
    //afficher la valeur d'un attribut 
    echo 'Le prénom de l\'utilisateur est : '.$utilisateur->getPrenom();
    echo '<br>';
    $utilisateur->setPrenom('Mathieu');
    var_dump($utilisateur);
    echo '<br>';
    //afficher la valeur d'un attribut 
    echo 'Le prénom de l\'utilisateur est : '.$utilisateur->getPrenom().'<br>';
    $admin = new User('Admin', 'root');
    var_dump($admin);
    echo '<br>';
    echo $utilisateur->afficherDetail();
    echo '<br>';
    echo $admin->afficherDetail();
    
?>