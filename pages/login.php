<?php
$pageTitle = 'Login';
include_once '../includes/header.php';
?>

<div class="login-container">
    <div class="login-box">
        <div class="auth-content">
            <div class="login-logo">
                <img src="../images/URBN ARTWhite.png" alt="URBN ART Logo">
            </div>
            <h2>Welcome Back</h2>
        </div>
        
        <form>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up here.</a></p>
    </div>
</div>

<?php include_once '../includes/footer.php'; ?>