<?php
if (isset($_POST['login'])) {
    extract($_POST);
    $password = md5($password);
    $admin = Admin::authenticate($email, $password);
    if ($admin) {
        if($admin['role'] == 'admin'){
            $_SESSION['admin'] = $admin;
            $_SESSION['type'] = "success";
            $_SESSION['message'] = "Connexion reussie.";
            header("Location:" . PATH . "dashboard");
        } else {
            $_SESSION['type'] = "error";
            $_SESSION['message'] = "Vous ne disposez pas des droits adminsitrateur pour acceder a cette page.";
            header("Location:" . PATH . "login");
        }
    } else {
        $_SESSION['type'] = "error";
        $_SESSION['message'] = "Email ou mot de passe incorrect.";
        header("Location:" . PATH . "login");
    }
    
}
