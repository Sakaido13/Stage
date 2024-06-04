<?php 
require_once 'Include/EnteteDePage.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUTILLAGES</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main class="main-content3">
        <div class="banner3">
            <img src="Images/background/Fond bois.jpg" alt="bois">
            <p id="banner-text3">OUTILLAGES</p>
        </div>

        <div class="product-grid">
            <!-- Repeating product card structure -->
            <?php for ($i = 0; $i < 8; $i++): ?>
            <div class="product-card">
                <img src="Images/products/screw.jpg" alt="Vis cruciforme américain (5mm)">
                <h3>Vis cruciforme américain (5mm)</h3>
                <p>1.55 €</p>
                <div class="product-actions">
                    <button class="add-to-cart">AJOUTER</button>
                    <img src="Images/icons/cart.png" alt="Cart">
                </div>
                <div class="wishlist-icon">
                    <img src="Images/icons/wishlist.png" alt="Wishlist">
                </div>
            </div>
            <?php endfor; ?>
        </div>

        <div class="pagination">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">...</a>
        </div>
    </main>
    <?php
    require_once 'Include/PiedDePage.inc.php';
    ?>
</body>
</html>
