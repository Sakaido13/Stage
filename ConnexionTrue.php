<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: index.php?action=1020');
    exit;
}

try {
    $bdd = new PDO('mysql:host=localhost;dbname=bipbipbat_bdd;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$email = $_SESSION['email'];

$recupuser = $bdd->prepare('SELECT * FROM user WHERE email = ?');
$recupuser->execute([$email]);
$user = $recupuser->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte Informations</title>
    <link rel="stylesheet" href="Style/styleCompte.css">
</head>
<body>
    <main class="main">
        <div class="banniere">
            <p id="banniere-text">MES INFORMATIONS</p>   
            <img src="Images/background/Fond bois.jpg" alt="bois">
        </div>
        <div class="Chemin">
            <p id="chemin-text"><a href="Acceuil.php">ACCUEIL</a> > COMPTE > MES INFORMATIONS</p>
        </div>
        <div class="bloc1">
            <h2>Informations du compte</h2>
            <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
            <p>Nom: <?php echo htmlspecialchars($user['nom']); ?></p>
            <p>adressedelivraison: <?php echo htmlspecialchars($user['adressedelivraison'])?></p>
            <p>prenom: <?php echo htmlspecialchars($user['prenom']); ?></p>
        </div>
        <div class="bloc2">
            <a href="Déconnexion.php" class="submit">Déconnexion</a>
        </div>
    </main>
</body>
</html>
