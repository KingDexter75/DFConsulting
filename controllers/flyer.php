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
    // let's get the data from the form
    $id = UUID;
    extract($_POST);
    $image = $_FILES['image'];

    $directory = "assets/uploads/blogs/";
    // Deplacons l'image dans le dossier prevu a cet effet en faissant appel a la fonction uploadFichier
    $image_path = uploadFichier($image, $directory);

    if ($image_path != false) {
        // Inserons l'image en base de donnees  
        $sql = Blogs::addBlog($id, $title, $content, $image_path);
        if ($sql) {
            $_SESSION['type'] = "success";
            $_SESSION['message'] = "Blog ajouté avec succès";
            header("Location:" . PATH . "blogs");
        } else {
            $delete = Blogs::deleteBlogById($id);
            unlink($image_path);
            $_SESSION['type'] = "error";
            $_SESSION['message'] = "Impossible d'ajouter le blog. Le titre existe peut-être déjà.";
            header("Location:" . PATH . "blogs");
        }
    }
}

// call the function getAllBlogs
$blogs = Blogs::getAllBlogs();

// let's verify if the user want to delete a blog
if ($_GET['delete']) {
    $id = str_secur($_GET['delete']);
    // get the blog to delete its image
    $blog = Blogs::getBlogById($id);
    $imagePath = $blog['imagePath'];

    // delete the image
    if (unlink($imagePath)) {
        // delete the blog
        $delete = Blogs::deleteBlogById($id);
        if ($delete) {
            $_SESSION['type'] = "warning";
            $_SESSION['message'] = "Blog supprimé avec succès";
            header("Location:" . PATH . "blogs");
        } else {
            $text = "Echec de la suppression du blog";
            header("Location:" . PATH . "blogs?error=" . $text);
        }
    } else {
        $text = "Echec de la suppression du blog";
        header("Location:" . PATH . "blogs?error=" . $text);
    }
}

// let's verify if the user want to edit a blog
if (isset($_GET['edit'])) {
    $id = str_secur($_GET['edit']);
    // get the blog to edit
    $blog = Blogs::getBlogById($id);
}
