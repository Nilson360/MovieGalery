<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/addFilm.css">
</head>
<body>
<?php

require_once './db.php';

if($_SERVER['REQUEST_METHOD']=== 'POST'){

    // réuperer les données du formulaire
    $titre = $_POST['titre'];
    $dateSortie = $_POST['releaseDate'];
    $affiche = $_POST['image'];
    $description= $_POST['description'];

    // insérer les données dans la base e données
    $query = "INSERT INTO films (titre, releaseDate,image, desription)
     VALUES ('$titre','$dateSortie','$affiche','$description')
    ";
    if(mysqli_query($connexion,$query)){
        echo "Film ajouté avec succès!";
    } else{
        echo "Erreur lors de l'ajout du film" . mysqli_error($connexion);
    }
}
?>
    <h1> Ajouter un nouveau film</h1>
    <form action="POST" action="addFilm.php">
        <label for="titre">Titre: </label>
        <input type="text" name="titre" id="titre" required><br>
        
        <label for="dateSortie">Date de sortie: </label>
        <input type="date" name="dateSortie" id="dateSortie" required><br>
       
        <label for="affiche">Affiche: </label>
        <input type="text" name="affiche" id="affiche" required><br>

        <label for="description">Description: </label>
        <input type="text" name="description" id="description" required><br>

        <input type="submit" value="Ajouter le film">
    </form>
</body>
</html>


