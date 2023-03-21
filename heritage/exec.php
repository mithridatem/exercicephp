<?php
    //importer les ressources
    include './user.php';
    include './admin.php';
    //instance de l'objet
    $util = new User('Mithridate','Mathieu','mathieu@adrar.com', md5('1234'));
    $test = new User('test','test','test@gmail.com', md5('iucgf'));
    //set les valeurs
    
    var_dump($util);
    echo '<br>';

    $admin = new Admin('Admin', 'Root', 'admin@adrar.com', md5('suffhjfzk'), 40);
    
    var_dump($admin);
    echo '<br>';
    echo $admin->test().'<br>';

    //appel de la fonction showUser
    echo $util->showUser().'<br>';
    echo $test->showUser().'<br>';
    echo $admin->showUser().'<br>';

    //appel de la fonction pour bannir un utilisateur
    $admin->banUser($util);
    $admin->banUser($test);
    //appel de la fonction pour afficher les utilisateurs bans
    $admin->showBanUser();