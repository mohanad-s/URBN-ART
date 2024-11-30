<?php
$pageTitle = 'Login';
include_once '../includes/header.php';
include_once '../includes/db_connection.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    $conn = getDBConnection();
    
    // Get user by username
    $stmt = $conn->prepare("SELECT id, username, password_hash FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password_hash'])) {
            // Password is correct, create session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            // Redirect to home page
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid username or password";
        }
    } else {
        $error = "Invalid username or password";
    }
    
    $conn->close();
}
?>

<div class="login-container">
    <div class="login-box">
        <div class="auth-content">
            <div class="login-logo">
                <img src="../images/URBN ARTWhite.png" alt="URBN ART Logo">
            </div>
            <h2>Welcome Back</h2>
        </div>
        
        <?php if ($error): ?>
            <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form method="POST" action="login.php">
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