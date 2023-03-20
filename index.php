<?php
    //import des ressources
    include './class.php';
    //instance d'un objet chat avec un constructeur avec des paramètres
    $cat = new Animal('chat', null, 4, true);
    
    //instance d'un objet chien avec un constructeur avec des paramètres
    $dog = new Animal('chien', 60, 7, false);

    var_dump($dog);
    echo '<br>';
    var_dump($cat);
    //modifier la valeur de l'attribut poid
    $dog->setPoid(50);
    echo '<br>';
    var_dump($dog);
    echo '<br>';
    //afficher le contenu d'un attribut
    echo "le nom de l'objet est : ".$dog->nom;
    echo '<br>';
    echo "le nom de l'objet est : ".$dog->getNom().'<br>';

    //utilisation d'une fonction
    $dog->crier();
    $cat->crier();

?>