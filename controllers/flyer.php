<?php

if (!isset($_SESSION['admin'])) {
    header("location: " . PATH . "home");
}

if (isset($_GET['action']) && $_GET['action'] == 'clear_flash') {
    // Suppression des messages de la session
    unset($_SESSION['message']);
    unset($_SESSION['type']);
    // On arrête l'exécution ici pour ne pas renvoyer toute la page HTML lors de l'appel AJAX
    exit();
}

// let's verify if the use submit the form
if (isset($_POST['save'])) {
    $image = $_FILES['image'];

    $directory = "assets/uploads/Flyer/";
    // Deplacons l'image dans le dossier prevu a cet effet en faissant appel a la fonction uploadFichier
    $image_path = uploadFichier($image, $directory);

    if ($image_path != false) {
        // Inserons l'image en base de donnees  
        $sql = Flyers::addFlyer($image_path);
        if ($sql) {
            $_SESSION['type'] = "success";
            $_SESSION['message'] = "Flyer ajouté avec succès";
            header("Location:" . PATH . "flyer");
        } else {
            unlink($image_path);
            $_SESSION['type'] = "error";
            $_SESSION['message'] = "Impossible d'ajouter le Flyer.";
            header("Location:" . PATH . "flyer");
        }
    } else {
        $_SESSION['type'] = "error";
        $_SESSION['message'] = "Impossible d'importer le Flyer car la taille est trop grande.";
        header("Location:" . PATH . "flyer");
    }
}

// call the function getAllFlyers
$Flyers = Flyers::getAllFlyers();

// let's verify if the user want to delete a Flyer
if ($_GET['delete']) {
    $id = str_secur($_GET['delete']);
    // get the Flyer to delete its image
    $Flyer = Flyers::getFlyerById($id);
    $image = $Flyer['image'];

    // delete the image
    if (unlink($image)) {
        // delete the Flyer
        $delete = Flyers::deleteFlyerById($id);
        if ($delete) {
            $_SESSION['type'] = "warning";
            $_SESSION['message'] = "Flyer supprimé avec succès";
            header("Location:" . PATH . "flyer");
        } else {
            $_SESSION['type'] = "error";
            $_SESSION['message'] = "Echec de la suppression du Flyer";
            header("Location:" . PATH . "flyer");
        }
    } else {
        $_SESSION['type'] = "error";
        $_SESSION['message'] = "Echec de la suppression de l'image ou inexistant";
        header("Location:" . PATH . "flyer");
    }
}

// let's verify if the user want to edit a Flyer
if (isset($_GET['edit'])) {
    $id = str_secur($_GET['edit']);
    // get the Flyer to edit
    $Flyer = Flyers::getFlyerById($id);
}
