<?php
require_once 'Include\EnteteDePageAccueil.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2">
    <title> <?php echo $titre?>   </title>
    <link rel="stylesheet" href="Style\styleAcceuil.css">
    <script src="script.js"></script>
</head>
<body>
    <main class="main">
        <div class="bannière">
            <img src="Images\background\Scooter.jpg" alt="Scooter">
            <div class="bannière-text text-haut-bannière">
                FAITES VOUS LIVRER DÈS MAINTENANT !
            </div>
            <div class="bannière-text2 text-haut-bannière2">
            <input type="text" placeholder="Recherchez votre produit">
            <button type="submit"><img src="Images\logo\logorecherche.png" alt="Rechercher"></button>

            </div>
            <div class="bannière-text text-bas-bannière">
                BIENVENUE CHEZ BIPBIPBAT
            </div>
        </div>
    
        <div class="info-section hidden" id="section1">
            <h2>Qui sommes-nous ?</h2>
            <p>BipBipBat, basée à Marseille, incarne une nouvelle ère dans le domaine de la livraison de matériel de chantier pour les particuliers. Enracinée dans le dynamisme méditerranéen, notre entreprise se distingue par son engagement à fournir un service de livraison rapide, efficace et fiable. Forts d'une équipe passionnée et dévouée, nous nous efforçons de simplifier l'accès aux matériaux de construction, offrant ainsi une expérience client exceptionnelle à chaque livraison.</p>
        </div>
        <div class="info-section hidden" id="section2">
            <h2>Comment ça marche ?</h2>
            <p>Le processus de commande chez BipBipBat est simple et intuitif. À l'aide de notre site conviviale, les utilisateurs peuvent parcourir une vaste gamme de matériaux de construction et passer leur commande en quelques clics seulement. Une fois la commande confirmée, notre équipe se met immédiatement en action. Nos livreurs expérimentés, équipés de scooters agiles, se rendent rapidement sur le lieu de livraison, assurant ainsi une réception rapide et sans tracas des matériaux commandés.</p>
        </div>
        <div class="info-section hidden" id="section3">
            <h2>Être livreur ?</h2>
            <p>Être livreur chez BipBipBat, c'est bien plus qu'un simple travail, c'est une expérience dynamique et gratifiante. Nous recherchons des individus passionnés par la conduite et le service client, prêts à parcourir les rues animées de Marseille pour assurer des livraisons rapides et ponctuelles. En tant que livreur, vous bénéficierez d'une grande flexibilité dans vos horaires, d'un soutien continu de notre équipe et de la possibilité de faire partie d'une entreprise en pleine croissance, redéfinissant les normes de la livraison de matériel de chantier dans la région. Rejoignez-nous aujourd'hui et faites partie de l'aventure BipBipBat !

            </p>
        </div>
        <div class="livraison">
            <img src="Images\logo\Bazaart-removebg-preview.png" alt ="Fast">
            </div>
    </main>
</body>
</html>
<?php
    require_once 'Include\PiedDePage.inc.php';
?>
