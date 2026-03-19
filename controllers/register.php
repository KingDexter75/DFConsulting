<?php
if (isset($_GET['action']) && $_GET['action'] == 'clear_flash') {
    // Suppression des messages de la session
    unset($_SESSION['message']);
    unset($_SESSION['type']);
    // On arrête l'exécution ici pour ne pas renvoyer toute la page HTML lors de l'appel AJAX
    exit();
}


if (isset($_POST['submit'])) {
    extract($_POST);
    $id = bin2hex(random_bytes(16));
    $password = md5($password);
    $result = Admin::addAdmin($id, $name, $email, $password);
    if ($result) {
        $_SESSION['type'] = "error";
        $_SESSION['message'] = "Vous ne disposez pas des privileges necessaires pour la creation du compte";
        header("Location:" . PATH . "login");
    } else {
        $_SESSION['type'] = "error";
        $_SESSION['message'] = "L'email existe deja";
        header("Location:" . PATH . "register");
    }
}
