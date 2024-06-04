<?php 
require_once 'Include/EnteteDePage.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENUISERIE</title>
    <link rel="stylesheet" href=Style\styleMenuiserie.css>
</head>
<body>
    <main class="main-content3">
        <div class="banner3">
        <p id="banner-text3">MENUISERIE</p> 
        <img src="Images/background/Fond bois.jpg" alt="bois">
        </div>
        <div class="Chemin">
        <P id="chemin-text"> <a href="Acceuil .php">ACCEUIL </a> > MENUISERIE<p>
        </div>
        <label for="Trier-select">Trier par ordre:</label>
        <select name="Trier" id="Trier-select">
        <option value="">Trier par défaut</option>
        <option value="Trier croissant">Trier par ordre croissant</option>
        <option value="Trier décroissant">Trier par ordre décroissant</option>
    </select>
    </main>
    <?php
    require_once 'Include/PiedDePage.inc.php';
    ?>
</body>
</html>
