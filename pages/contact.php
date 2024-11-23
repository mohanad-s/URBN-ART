<!--
Name: Mohanad Al Dakheel
ID: 2135847
Date: 19 Sep 2024
Section: Contact Page
-->
<!-- The following code defines the contact information for URBN ART, 
     including owner name, phone number, address, and email, and provides a link back to the home page. -->
<?php
$pageTitle = 'contact';
include_once '../includes/header.php';
?>
     <!DOCTYPE html>
     <html lang="en">
     
     <head>
         <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>URBN ART - Contact Us</title>
         <link rel="stylesheet" href="../style.css">
     </head>
     
     <body>
         <!-- Header Section: Logo, background image, and login/signup buttons -->
         <header>
             <div class="header-logo left">
                 <img src="images\URBN ARTBlack.png" alt="URBN ART Logo">
             </div>
             <div class="header-img">
             <div class="auth-buttons">
                 <button onclick="window.location.href='login.html'">Login</button>
                 <button onclick="window.location.href='signup.html'">Sign Up</button>
             </div>    
             </div>
         </header>
     
         <!-- Back to Home Link: A link for users to return to the homepage -->
         <div class="back-link">
             <a href="index.html"> >Back to Home </a>
         </div>
     
         <!-- Contact Information Section -->
         <main>
             <section class="contact-info">
                 <h2>Contact Information</h2>
                 <p><strong>Owner:</strong> Mohanad Sulaiman Al Dakheel</p>
                 <p><strong>Phone:</strong> +966 555 5555 9999</p>
                 <p><strong>Address:</strong> Jeddah, Saudi Arabia</p>
                 <p><strong>Email:</strong> <a href="mailto:mohannadaldakheel3.5@gmail.com">mohannadaldakheel3.5@gmail.com</a></p>
             </section>
     
             <!-- Adding an unordered list to meet Requirement 11 -->
             <section class="social-media">
                 <h3>Follow Us</h3>
                 <ul>
                     <li>Instagram: @URBN_ART</li>
                     <li>Twitter: @URBN_ART</li>
                     <li>Facebook: URBN ART Graffiti</li>
                 </ul>
             </section>
         </main>
     
         <!-- Footer Section -->
         <footer>
             <p>&copy; 2024 URBN ART. All rights reserved.</p>
             <address>
                 contact us at <a href="mailto:info@urbnart.com">info@urbnart.com</a>
             </address> <!-- Applying Requirement 12 (address tag) -->
         </footer>
     </body>
     
     </html>
<?php
include_once '../includes/footer.php';
?>