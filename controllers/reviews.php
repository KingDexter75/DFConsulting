<?php
if (isset($_GET['action']) && $_GET['action'] == 'clear_flash') {
    // Suppression des messages de la session
    unset($_SESSION['message']);
    unset($_SESSION['type']);
    // On arrête l'exécution ici pour ne pas renvoyer toute la page HTML lors de l'appel AJAX
    exit();
}


// let's verify if the use submit the form
if (isset($_POST['save'])) {
    // let's get the data from the form
    $id = UUID;
    extract($_POST);

    
    $sql = Reviews::addReviews($id, $name, $message);
    if ($sql) {
        $_SESSION['type'] = "success";
        $_SESSION['message'] = "Avis ajouté avec succès";
        header("Location:" . PATH . "reviews");
    } else {
        $_SESSION['type'] = "error";
        $_SESSION['message'] = "Impossible d'ajouter l'avis de l'utilisateur.";
        header("Location:" . PATH . "reviews");
    }
}

// call the function getAllReviews
$reviews = Reviews::getAllReviews();

// let's verify if the user want to delete a reviews
if ($_GET['delete']) {
    $id = str_secur($_GET['delete']);

    // delete the blog
    $delete = Reviews::deleteReviewsById($id);
    if ($delete) {
        $_SESSION['type'] = "warning";
        $_SESSION['message'] = "Avis supprimé avec succès";
        header("Location:" . PATH . "reviews");
    } else {
        $_SESSION['type'] = "error";
        $_SESSION['message'] = "Impossible de supprimer l'avis.";
        header("Location:" . PATH . "reviews");
    }
}

// let's verify if the user want to edit a review
if (isset($_GET['edit'])) {
    $id = str_secur($_GET['edit']);
    // get the blog to edit
    $blog = Reviews::getReviewsById($id);
}
