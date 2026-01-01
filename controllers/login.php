<?php
if (isset($_POST['login'])) {
    extract($_POST);
    $password = md5($password);
    $admin = Admin::authenticate($email, $password);
    if ($admin) {
        if($admin['role'] == 'admin'){
            $_SESSION['admin'] = $admin;
            header("Location:" . PATH . "dashboard?success=1");
        } else {
            header("Location:" . PATH . "login?error=1");
        }
    } else {
        header("Location:" . PATH . "login?error=1");
    }
    
}
