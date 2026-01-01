<?php

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
