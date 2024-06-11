<?php 
require_once 'Include/EnteteDePage.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPTE</title>
    <link rel="stylesheet" href="Style/styleCompte.css">
</head>
<body>  
    <main class="main">
        <div class="bannière">
          <p id="bannière-text"> MON COMPTE</p>   
          <img src="Images/background/Fond bois.jpg" alt="bois">
        </div>
        <div class="Chemin">
            <p id="chemin-text"><a href="Acceuil.php">ACCUEIL </a> > COMPTE</p>
        </div>
        <div class="bloc1">
            <!-- Modification du bouton pour rediriger vers la page de création de compte -->
            <a href="index.php?action=1010">
                <button type="button" alt="Créer un compte"> <p id="but">Créer un compte</p> </button>
            </a>
            <p>NOUVEAU CLIENT </p>
        </div>
        <div class="bloc2">
            <p>DEJA CLIENT ? </p>
        </div>
        <div class="Email">
            <input type="email" placeholder="veuillez saisir une adresse">
        </div>
        <div class="Motdepasse"> 
            <input type="password" placeholder="veuillez saisir un mot de passe">
        </div>      
        <div class="txtM">
            <p>Email : </p>   
        </div> 
        <div class="txtMdp">
           <p> Mot de passe : </p>
        </div>
    </main>
    <?php
    require_once 'Include/PiedDePage.inc.php';
    ?>
</body>
</html>
