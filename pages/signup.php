<!--
Name: Mohanad Al Dakheel
ID: 2135847
Date: 19 Sep 2024
Section: Shopping Cart
-->

<!-- The following code defines the sign up page, it is a simple box of username, email, password and password confirmation input spaces with our logo 
 on top of the box, if the user already have an account he can click on a hyperlink that directs them into login page -->
 <?php
$pageTitle = 'Signup';
include_once '../includes/header.php';
?>
<!DOCTYPE html> <!--Applying Technical Requirement Number 7: DOCTYPE declaration-->
<html lang="en">

<!--Applying Technical Requirement Number 8(head tag)-->
<head>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Sign Up for URBN ART</title> <!--Applying Technical Requirement Number 3: Setting page title-->
    
    <link rel="stylesheet" href="CSS\style.css">
</head>

<!-- Body Section begins here -->
<body>
    <!-- Wrapping everything in signup-container to apply background and center content -->
    <div class="signup-container">
        <!-- Sign-Up box containing the logo, form, and related elements -->
        <div class="signup-box">
            <!-- URBN ART logo for branding purpose -->
            <div class="signup-logo">
                <img src="..\images\URBN ARTWhite.png" alt="URBN ART Logo">
            </div>
            <!-- Main heading of the sign-up form -->
            <h2>Sign Up for URBN ART</h2>
            <!-- Sign-up form begins -->
            <form>
                <!-- Label for username input field -->
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required> <!-- Username input field -->

                <!-- Label for email input field -->
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required> <!-- Email input field -->

                <!-- Label for password input field -->
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required> <!-- Password input field -->

                <!-- Label for confirm password input field -->
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required> <!-- Confirm password input field -->

                <!-- Submit button for sign-up form -->
                <button type="submit">Sign Up</button>
            </form>
            <!-- Link to the login page for existing users -->
            <p>Already have an account? <a href="login.php">Login here.</a></p>
        </div>
    </div>
</body>
<!-- End of Body Section -->

</html> <!-- End of HTML document -->

<?php
include_once '../includes/footer.php';
?>
