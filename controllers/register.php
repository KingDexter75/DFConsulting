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
        header("Location:" . PATH . "login?error=1");
    } else {
        header("Location:" .PATH. "register?error=1");
    }
}
