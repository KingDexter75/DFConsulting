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

if(isset($_GET['review'])){
    $id = str_secur($_GET['review']);
    $review = Reviews::getReviewsById($id);
}
else if(isset($_GET['blog'])){
    $id = str_secur($_GET['blog']);
    $blog = Blogs::getBlogById($id);
}
else{
    header('Location: ' . PATH . 'dashboard');
    exit();
}


if(isset($_POST['submit_blog'])){
    $idB = $_GET['blog'];
    extract($_POST);
    $image = $_FILES['image'];

    // Lets check if the user uploaded a new image
    if($image['size'] > 0){
        $directory = "assets/uploads/blogs/";

        // Let's get the old blog information
        $oldBlog = Blogs::getBlogById($idB);
        $oldImagePath = $oldBlog['imagePath'];

        // Let's doing the update in the database
        // Upload the new image
        $image_path = uploadFichier($image, $directory);
        if ($image_path != false) {
            $update = Blogs::updateBlogById($id, $title, $content, $image_path);
            if ($update) {
                // Let's delete the old image
                unlink($oldImagePath);
                $_SESSION['message'] = "Le blog a été mis à jour avec succès.";
                $_SESSION['type'] = "success";
                header('Location: ' . PATH . 'blogs');
            } else {
                $_SESSION['type'] = "error";
                $_SESSION['message'] = "Erreur lors de la mise à jour du blog. Le titre existe peut-être déjà.";
                header("Location:" . PATH . "blogs");
            }
        } else {
            $_SESSION['type'] = "error";
            $_SESSION['message'] = "Erreur lors du téléchargement de l'image.";
            header("Location:" . PATH . "blogs");
        }
    } else {
        // Let's doing the update in the database
        $update = Blogs::updateBlogById($id, $title, $content);
    }

}


if(isset($_POST['submit_review'])){
    $idR = $_GET['review'];
    extract($_POST);

    $update = Reviews::updateReviewsById($idR, $name, $message);
    if($update){
        $_SESSION['message'] = "L'avis a été mis à jour avec succès.";
        $_SESSION['type'] = "success";
        header('Location: ' . PATH . 'reviews');
    }
    else{
        $_SESSION['type'] = "error";
        $_SESSION['message'] = "Erreur lors de la mise à jour de l'avis.";
        header("Location:".PATH."reviews");
    }
}