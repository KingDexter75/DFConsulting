<?php
if (isset($_GET['action']) && $_GET['action'] == 'clear_flash') {
    // Suppression des messages de la session
    unset($_SESSION['message']);
    unset($_SESSION['type']);
    // On arrête l'exécution ici pour ne pas renvoyer toute la page HTML lors de l'appel AJAX
    exit();
}

$testimonials = Reviews::getAllReviews();

if(isset($_POST['submit'])){
    extract($_POST);
    $sql = Reviews::addReviews($id, $name, $message);
    if ($sql) {
        $_SESSION['type'] = "success";
        $_SESSION['message'] = "Témoignange ajouté avec succès";
        header("Location:" . PATH . "about");
    } else {
        $_SESSION['type'] = "error";
        $_SESSION['message'] = "Impossible d'ajouter le témoignange de l'utilisateur.";
        header("Location:" . PATH . "about");
    }
}