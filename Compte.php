<?php
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=bipbipbat_bdd;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$message = "";

if (isset($_POST["login"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $email = htmlspecialchars($_POST["email"]);
        $password = $_POST["password"];

        $recupuser = $bdd->prepare('SELECT * FROM user WHERE email = ?');
        $recupuser->execute([$email]);

        if ($recupuser->rowCount() > 0) {
            $user = $recupuser->fetch();
            if (password_verify($password, $user['password'])) {
                $_SESSION['email'] = $user['email'];
                $_SESSION['id'] = $user['id'];
                $message = "Connexion réussie !";
                header('Location: index.php?action=1020');
            } else {
                $message = "Mot de passe incorrect.";
            }
        } else {
            $message = "Aucun utilisateur trouvé avec cet email.";
        }
    } else {
        $message = "Veuillez compléter tous les champs.";
    }
}
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
    <div class="banniere">
        <p id="banniere-text">MON COMPTE</p>   
        <img src="Images/background/Fond bois.jpg" alt="bois">
    </div>
    <div class="Chemin">
        <p id="chemin-text"><a href="Acceuil.php">ACCUEIL</a> > COMPTE</p>
    </div>
    <div class="bloc1">
        <p>NOUVEAU CLIENT</p>
        <a href="index.php?action=1010">
            <button type="button" alt="Créer un compte">CRÉER UN COMPTE</button>
        </a>
    </div>
    <div class="bloc2">
        <p>DEJA CLIENT ?</p>

    

        <form id = "frmConnexion" method="post" action="Compte.php">
            <div class="txtM">
                <label for="email">Email :</label><br>
                <div class="Email">
                    <input type="email" id="email" name="email" placeholder="Saisir une adresse" required>
                </div>
            </div>
            <div class="txtMdp">
                <label for="password">Mot de passe :</label><br>
                <div class="Motdepasse"> 
                    <input type="password" id="password" name="password" placeholder="Saisir un mot de passe" required>
                </div>
            </div>
            <div class="forgot-password">
                <a href="mot_de_passe_oublie.php">Mot de passe oublié?</a>
            </div>
            <input id="log" type="submit" name="login" value="Connexion" class="submit">
            </div>
        </form>

        <?php if (!empty($message)): ?>
            <p class="message"><?php echo $message; ?></p>
        <?php endif; ?>
</main>
<?php
require_once 'Include/PiedDePage.inc.php';
?>
</body>
</html>
