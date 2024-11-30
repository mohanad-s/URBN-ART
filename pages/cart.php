<?php
$pageTitle = 'Shopping Cart';
include_once '../includes/header.php';
?>

<h1>Shopping Cart</h1>
<section class="shopping-cart">
    <!-- Cart Items -->
    <div class="cart-items">
        <div class="cart-item">
            <img src="../images/URBN ART_Bottle1.png" alt="URBN Gold - Chrome">
            <div class="cart-item-info">
                <h2>URBN Gold - Chrome</h2>
                <p>45 SAR</p>
            </div>
            <img class="delete-icon" src="../images/delete.png" alt="Delete">
        </div>
        <div class="cart-item">
            <img src="../images/URBN ART_Gloves.png" alt="URBN Nylon Gloves">
            <div class="cart-item-info">
                <h2>URBN Nylon Gloves</h2>
                <p>25 SAR</p>
            </div>
            <img class="delete-icon" src="../images/delete.png" alt="Delete">
        </div>
    </div>

    <!-- Cost Breakdown -->
    <div class="cost-breakdown">
        <p>Subtotal: 59.5 SAR</p>
        <p>VAT: 10.5 SAR</p>
        <p>Delivery: 15 SAR</p>
        <div class="grand-total">
            <p>Grand total: 85 SAR</p>
        </div>
        <button class="pay-now-btn">Pay Now</button>
    </div>
</section>

<?php include_once '../includes/footer.php'; ?>