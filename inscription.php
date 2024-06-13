<?php
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=bipbipbat_bdd;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST["submit"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["adressedelivraison"])) {
        $email = htmlspecialchars($_POST["email"]);
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $adressedelivraison = htmlspecialchars($_POST["adressedelivraison"]);

        $insertuser = $bdd->prepare('INSERT INTO user (email, password, nom, prenom, adressedelivraison) VALUES (?, ?, ?, ?, ?)');
        $insertuser->execute([$email, $password, $nom, $prenom, $adressedelivraison]);

        $recupuser = $bdd->prepare('SELECT * FROM user WHERE email = ?');
        $recupuser->execute([$email]);

        if ($recupuser->rowCount() > 0) {
            $user = $recupuser->fetch();
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $user['id'];

            echo "Compte créé avec succès !";
        }
    } else {
        echo "Veuillez compléter tous les champs.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSCRIPTION</title>
    <link rel="stylesheet" href="Style/styleinscription.css">
</head>
<body>
    <main class="main">
        <div class="banniere">
            <img src="Images/background/Fond bois.jpg" alt="bois">
                <p id="banniere-text">INSCRIPTION</p> 
            </div>
        </div>
        <div class="form-container">
            <form method="post" action="">
                <input type="email" name="email" placeholder="Adresse e-mail" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <input type="text" name="nom" placeholder="Nom" required>
                <input type="text" name="prenom" placeholder="Prénom" required>
                <input type="text" name="adressedelivraison" placeholder="Votre adresse de livraison" required>
                <input type="submit" name="submit" value="CRÉER UN COMPTE">
            </form>
        </div>
    </main>
</body>
</html>

