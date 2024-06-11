<?php

require_once __DIR__ . '/../Include/EnteteDePage.inc.php'; 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/styleinscription.css">
    <title>Inscription</title>
</head>
<body> <main class="main">
        <div class="bannière">
        <p id="bannière-text">Inscription </p> 
        <img src="C:\xampp\htdocs\Stage\Stage\Images\background\Fond bois.jpg" alt="bois">
        </div>
        <div class="Chemin">
        <P id="chemin-text"> <a href="Acceuil .php">ACCUEIL </a> > Inscription <p>
        </div>
        <label for="Trier-select">Trier par ordre:</label>
        <select name="Trier" id="Trier-select">
        <option value="">Trier par défaut</option>
        <option value="Trier croissant">Trier par ordre croissant</option>
        <option value="Trier décroissant">Trier par ordre décroissant</option>
    </select>
    </main>
    <form method="post" action="">
        <input type="email" name="email" placeholder="Adresse e-mail" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="prenom" placeholder="Prénom" required>
        <input type="text" name="adressedelivraison" placeholder="Votre adresse de livraison" required>

        <br><br>
        <input type="submit" name="submit" value="Créer un compte">
    </form>
</body>
</html>
