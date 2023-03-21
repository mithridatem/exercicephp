<?php
    //import de la classe
    include './vehicule.php';
    //instancier les objets
    $voiture = new Vehicule('Mercedes CLK', 4, 250);
    $moto = new Vehicule('Honda CBR', 2, 280);
    $test = new Vehicule('test', 6, 400);
    //appeler la fonction detect sur les 2 objets
    echo "<p>Le vehicule est  de type : ".$voiture->detect()."</p>";
    echo "<p>Le vehicule est  de type : ".$moto->detect()."</p>";
    echo "<p>Le vehicule est  de type : ".$test->detect()."</p>";
    //ajout de 50 à la vitesse avec la méthode boost de la classe
    $voiture->boost();
    //afficher la vitesse de mon objet voiture
    echo "<p>La vitesse de mon véhicule est : ".$voiture->getVitesse()." Km/h</p>";
    //appel de la méthode pour déterminer le véhicule le plus rapide
    echo "<p>Le véhicule le plus rapide est : ".$voiture->plusVite($voiture)."<p>";
    //version avec statique
    echo "<p>Le véhicule le plus rapide est : ".Vehicule::plusViteV2($test, $moto)."<p>";
?>