<?php
$pageTitle = 'Products';
include_once '../includes/header.php';
?>

<div class="back-link">
    <a href="../includes/index.php">Back to Home</a>
</div>

<main>
    <h2>Products</h2>
    <section class="products-grid">
    <div class="product-item">
        <a href="product.php?id=1">
        <img src="/images/URBN ART_Bottle1.png" alt="URBN Gold- Chrome" class="hover-effect">
        </a>
        <p>URBN Gold- Chrome</p>
        </div>

        <div class="product-item">
        <a href="product.php?id=2">
            <img src="../images/URBN ART_Bottle2.png" alt="URBN Gold- Pink">
        </a>
            <p>URBN Gold- Pink</p>
        </div>

        <div class="product-item">
        <a href="product.php?id=3">
            <img src="../images/URBN ART_Bottle3.png" alt="URBN Gold- Purple">
            </a>
            <p>URBN Gold- Purple</p>
        </div>

        <div class="product-item">
        <a href="product.php?id=4">
            <img src="../images/URBN ART_Bottle4.png" alt="URBN Gold- Turquoise">
            </a>
            <p>URBN Gold- Turquoise</p>
        </div>

        
        <div class="product-item">
        <a href="product.php?id=5">
            <img class="large-image" src="../images/URBN ARTTip.png" alt="URBN Skinny Cap">
            </a>
            <p>URBN Skinny Cap</p>
        </div>

        <div class="product-item">
        <a href="product.php?id=6">
            <img class="large-image" src="../images/URBN ART_Gloves.png" alt="URBN Nylon Gloves">
            </a>
            <p>URBN Nylon Gloves</p>
        </div>
       

        <div class="product-item">
        <a href="product.php?id=7">
            <img src="../images/URBN ART_Ink.png" alt="URBN Bold Ink">
            </a>
            <p>URBN Bold Ink</p>
        
        </div>
        <div class="product-item">
        <a href="product.php?id=7">
            <img class="large-image" src="../images/URBN ART_Bag.png" alt="URBN Cotton Bag">
            </a>
            <p>URBN Cotton Bag</p>
        </div>
    </section>
</main>

<?php include_once '../includes/footer.php'; ?>