<?php

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lève des exceptions en cas d'erreur
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Récupère les résultats sous forme de tableau associatif
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Désactive l'émulation des requêtes préparées (recommandé)
];

try{
    $db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD, $options);
} catch(PDOException $e){
    die("Database connection failed: " . $e->getMessage());
}