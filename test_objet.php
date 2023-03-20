<?php
    //import des fichiers (classe Maison)
    include './maison.php';
    //instancier un nouvel objet maison
    $villa = new Maison('Villa', 20, 16, 3);
    //afficher le résultat du calcul
    echo '<p> La surface de l\'habitation : '.$villa->getNom().' 
    est de : '.$villa->surface().' m²</p>'; 
?>