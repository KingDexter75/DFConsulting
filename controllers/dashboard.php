<?php

if (isset($_GET['action']) && $_GET['action'] == 'clear_flash') {
    // Suppression des messages de la session
    unset($_SESSION['message']);
    unset($_SESSION['type']);
    // On arrête l'exécution ici pour ne pas renvoyer toute la page HTML lors de l'appel AJAX
    exit();
}


$twoLastBlogs = Blogs::getLastTwoBlogs();
$twoLastReviews = Reviews::getLastTwoReviews();

$totalBlogs = Blogs::countBlogs();
$totalReviews = Reviews::countReviews();

$totalAdmins = Admin::countAdmins();