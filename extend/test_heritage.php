<?php
    include './maison.php';
    include './immeuble.php';
    //avec un objet Maison
    $villa = new Maison('Villa', 20, 14);
    //afficher le résultat du calcul
    echo '<p> La surface de l\'habitation : '.$villa->getNom().' 
    est de : '.$villa->surface().' m²</p>'; 
    //avec un objet Immeuble
    $immeuble = new Immeuble(5);
    $immeuble->setNom('Immeuble');
    $immeuble->setLongueur(30);
    $immeuble->setLargeur(50);
    //afficher le résultat du calcul
    echo '<p> La surface de l\'immeuble : '.$immeuble->getNom().' 
    est de : '.$immeuble->surface().' m²</p>'; 

    echo $villa;
?>