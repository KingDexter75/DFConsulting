<?php

function str_secur($string){
    return trim(htmlspecialchars($string));
}


function debug($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function uploadFichier($file, $dossier)
{
    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
        return false;
    }

    $nouveauNom = UUID . "_" . basename($file['name']);
    $chemin = $dossier . $nouveauNom;

    if (move_uploaded_file($file['tmp_name'], $chemin)) {
        return $chemin;
    } else {
        return false;
    }
}