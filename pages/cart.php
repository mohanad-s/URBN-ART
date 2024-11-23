<!--
Name: Mohanad Al Dakheel
ID: 2135847
Date: 19 Sep 2024
Section: Shopping Cart
-->

<!-- The following code defines the shopping cart page for URBN ART, 
providing cart items, cost breakdown, and payment options for the user. -->
<?php
$pageTitle = 'cart';
include_once '../includes/header.php';
?>
     <!DOCTYPE html>
     <html lang="en">
     
     <head>
         <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>URBN ART - Shopping Cart</title>
         <link rel="stylesheet" href="../style.css">
     </head>
     
     <body>
         <!-- Header Section: Logo, background image, and login/signup buttons -->
         <header>
             <div class="header-logo">
                 <img src="images\URBN ARTBlack.png" alt="URBN ART Logo">
             </div>
             <div class="header-img"></div>
             <div class="auth-buttons">
                 <button onclick="window.location.href='login.html'">Login</button>
                 <button onclick="window.location.href='signup.html'">Sign Up</button>
             </div>
         </header>
     
         <!-- Shopping Cart Section -->
         <main>
             <h1>Shopping Cart</h1>
             <section class="shopping-cart">
                 <!-- Cart Items -->
                 <div class="cart-items">
                     <div class="cart-item">
                         <img src="images\URBN ART_Bottle1.png" alt="URBN Gold - Chrome">
                         <div class="cart-item-info">
                             <h2>URBN Gold - Chrome</h2>
                             <p>45 SAR</p>
                         </div>
                         <img class="delete-icon" src="images\delete.png" alt="Delete">
                     </div>
                     <div class="cart-item">
                         <img src="images\URBN ART_Gloves.png" alt="URBN Nylon Gloves">
                         <div class="cart-item-info">
                             <h2>URBN Nylon Gloves</h2>
                             <p>25 SAR</p>
                         </div>
                         <img class="delete-icon" src="images\delete.png" alt="Delete">
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
         </main>
     
         <!-- Footer Section -->
         <footer>
             <p>&copy; 2024 URBN ART. All rights reserved.</p> <!-- Applying Requirement 16 -->
             <address>
                 Contact us at <a href="mailto:info@urbnart.com">info@urbnart.com</a>
             </address> <!-- Applying Requirement 12 (address tag) -->
         </footer>
     </body>
     
     </html>
     
<?php
include_once '../includes/footer.php';
?>