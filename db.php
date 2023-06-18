<?php
// connexion à la base de données

require_once 'config.php';

// création de la connexion à la base de données
$connexion = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

// vérification des erreurs de connexion

if(!$connexion){
    die("erreur de connexion à la base de données: " .mysqli_connect_error());
}