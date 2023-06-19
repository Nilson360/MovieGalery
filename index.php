<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/addFilm.css">
    <link rel="stylesheet" href="./style/header.css">
    <title>Page d'accueil</title>
</head>
<body>

<?php
// Point d'entrée principal de votre application

// Inclusion des fichiers nécessaires
require_once 'db.php';
require_once 'functions.php';

// Gestion du routage
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Si la méthode HTTP est GET, vérifions l'URL demandée

    // Page d'accueil
    if ($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index.php') {
        include 'header.php';

        // Afficher le contenu de la page d'accueil
        echo '<h2>Bienvenue dans Mon Projet Cinéma !</h2>';
        // Autres éléments de la page d'accueil

        include 'footer.php';
    }

    // Page de liste des films
    elseif ($_SERVER['REQUEST_URI'] === '/liste_films.php') {
        include 'liste_films.php';
    }

    // Route par défaut pour les URL non reconnues
    else {
        // Afficher une page d'erreur 404
        include 'header.php';
        echo '<h2> TEST</h2>';
        include './moviesFunctions/addFilm.php';
        // Autres éléments de la page d'erreur 404

        include 'footer.php';
    }
}

?>

</body>
</html>