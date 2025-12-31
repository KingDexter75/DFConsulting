<?php
    
    include_once '_config/config.php';
    include_once '_functions/functions.php';
    include_once '_classes/Autoloader.php';
    Autoloader::register();
    include_once '_config/db.php';

    // Definition de la page courante
    if(isset($_GET['page']) AND !empty($_GET['page'])) {
        $page = trim(strtolower($_GET['page']));
    } else{
        $page = 'home';
    }

    // Tableau des pages
    $allPages = scandir('controllers/');

    if(in_array($page. '.php', $allPages)){
        // Inclusion de notre page
        include_once 'controllers/' .$page. '.php';
        include_once 'views/' .$page. '.php';
    } else{
        echo 'Error 404: Page not found';
    }