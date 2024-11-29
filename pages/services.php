<!--
Name: Mohanad Al Dakheel
ID: 2135847
Date: 19 Sep 2024
Section: Service Page
-->

<!-- The following code defines the services menu for URBN ART, 
allowing users to navigate to various sections of the website such as products and contact -->
<?php
$pageTitle = 'Services';
include_once '../includes/header.php';
?>
     <!DOCTYPE html> <!-- Applying Technical Requirement Number 7 -->
     <html lang="en">
     <!-- Applying Technical Requirement Number 8 -->
     <head>
         <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet"> 
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>URBN ART - Services</title> <!-- Applying Technical Requirement Number 2,3 -->
         <link rel="stylesheet" href="CSS\style.css">
     </head>
     
     <!-- Applying Technical Requirement Number 8 -->
     <body>
         <!-- Services Menu -->
         <main class="services-menu">
             <!-- Our Services Heading -->
             <h2>Our Services</h2>
     
             <!-- Menu Buttons: Navigation to different sections -->
             <div class="menu-buttons">
                 <button onclick="window.location.href='../includes/index.php'"><b>Home</b></button>
                 <button onclick="window.location.href='products.php'"><b>Products</b></button>
                 <button onclick="window.location.href='cart.php'"><b>Shopping Cart</b></button>
                 <button onclick="window.location.href='contact.php'"><b>Contact Us</b></button>
             </div>
         </main>
     
     </body>
     
     </html>
<?php
include_once '../includes/footer.php';
?>
