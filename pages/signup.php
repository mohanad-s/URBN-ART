<?php
$pageTitle = 'Signup';
include_once '../includes/header.php';
?>

<div class="signup-container">
    <div class="signup-box">
        <div class="auth-content">
            <div class="signup-logo">
                <img src="../images/URBN ARTWhite.png" alt="URBN ART Logo">
            </div>
            <h2>Create Account</h2>
        </div>

        <form>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here.</a></p>
    </div>
</div>

<?php include_once '../includes/footer.php'; ?>