<!--
Name: Mohanad Al Dakheel
ID: 2135847
Date: 19 Sep 2024
Section: Item Details Page
-->

<!-- The following code defines the item details for URBN ART products, 
     providing descriptions, specifications, and price information for the URBN Gold - Chrome spray paint. -->
<?php
$pageTitle = 'itemDetails';
include_once '../includes/header.php';
?>
     <!DOCTYPE html>
     <html lang="en">
     
     <body>
         <!-- Header Section: Logo, background image, and login/signup buttons -->
         <header>
             <div class="header-logo">
                 <img src="..\images\URBN ARTBlack.png" alt="URBN ART Logo">
             </div>
             <div class="header-img"></div>
             <div class="auth-buttons">
                 <button onclick="window.location.href='login.php'">Login</button>
                 <button onclick="window.location.href='signup.php'">Sign Up</button>
             </div>
         </header>
     
         <!-- Back to Products Link -->
         <div class="back-link">
             <a href="products.php"> >Back to Products </a>
         </div>
     
         <!-- Item Details Section -->
         <main>
             <section class="item-details">
                 <!-- Product Image -->
                 <div class="item-image">
                     <img src="images\URBN ART_Bottle1.png" alt="URBN Gold - Chrome">
                 </div>
     
                 <!-- Product Information -->
                 <div class="item-info">
                     <h1>URBN Gold - Chrome</h1>
                     <h2>The Perfect Spray Paint for Chrome Effects</h2>
                     <p>The URBN GOLD CHROME EFFECT colors are high quality low-pressure spray paints. The range consists of 3 vibrant chrome effect colors. The unique NC-Acrylic formula is quick-drying and high-covering. Perfect for decorative use, the deceivingly real chrome effects are achieved by the increased reflection of light off the metallic pigment particles that dry on the surface of the paint lacquer or “open” surface.</p>
                     <p>Chrome Effect colors can be applied to many surfaces such as canvas, wood, concrete, metal, glass, and even flexible surfaces for any skill level. We highly recommend testing on a small area before full application.</p>
     
                     <!-- Applying Requirement 11: Unordered list for product specifications -->
                     <ul>
                         <li><strong>Color Shades:</strong> 3</li>
                         <li><strong>Content:</strong> 400ml</li>
                         <li><strong>Gloss Level:</strong> Semi-matt finish</li>
                         <li><strong>Lacquer Base:</strong> NC-Acrylic</li>
                         <li><strong>Valve System:</strong> Low-Pressure</li>
                     </ul>
                     <p><strong>Price:</strong> 45 SAR</p>
                     <button>Add to Cart</button>
                 </div>
             </section>
         </main>
     
     </html>
     
<?php
include_once '../includes/footer.php';
?>