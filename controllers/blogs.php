<?php

if (isset($_POST['save'])) {
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
            header("Location:" . PATH . "blogs?success=1");
        } else {
            $delete = Blogs::deleteBlogById($id);
            unlink($image_path);
            header("Location:" . PATH . "blogs?error=1");
        }
    }
}

$blogs = Blogs::getAllBlogs();
