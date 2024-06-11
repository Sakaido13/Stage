<?php
include 'C:\xampp\htdocs\Stage\Stage\Include\EnteteDePage.inc.php';
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=bipbipbat_bdd;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST["submit"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $email = htmlspecialchars($_POST["email"]);
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

        $insertuser = $bdd->prepare('INSERT INTO user (email, password) VALUES (?, ?)');
        $insertuser->execute([$email, $password]);

        $recupuser =$bdd->prepare('SELECT * FROM user WHERE email = ? AND password = ?');  
        $recupuser->execute(array($email,$password));
        if($recupuser->rowCount()>0){
   
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        $_SESSION['id']=$recupuser->fetch()['id'];
        
        }
        echo "Compte créé avec succès !";
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
    <link rel="stylesheet" href="Style\styleHeader.css">
    <title>Inscription</title>
</head>
<body>
    <form method="post" action="">
        <input type="email" name="email" placeholder="Adresse e-mail" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <br><br>
        <input type="submit" name="submit" value="Créer un compte">
    </form>
</body>
</html>
