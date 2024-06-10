<?php 
require_once 'Include/EnteteDePage.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre ?> </title>
    <link rel="stylesheet" href=Style\styleCompte.css>
</head>
<body>  
    <main class="main">
        <div class="bannière">
          <p id="bannière-text"><?php echo $titre ?>  </p>   
        <img src="Images/background/Fond bois.jpg" alt="bois">
          </div>
        <div class="Chemin">
            <P id="chemin-text"> <a href="Acceuil .php">ACCUEIL </a> > <?php echo $titre ?> <p>
        </div>
        <div class="bloc1">
            <p>NOUVEAU CLIENT </p>
        </div>
        <div class="bloc2">
            <p>DEJA CLIENT ? </p>
        </div>
        <div class ="Email">
          <input type="Email" placeholder="veuillez saisir une adresse">
        </div>
        <div class ="Motdepasse"> 
        <input type="txt" placeholder="veuillez saisir un mot de passe">
        </div>      
        <div class="txtM">
        <p>Email : </p>   
        </div> 
        <div class="mdp">
           <p> Mot de passe : </p>
      </div>
    </main>
    <?php
    require_once 'Include/PiedDePage.inc.php';
    ?>
</body>
</html>
