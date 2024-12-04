<?php
$pageTitle = 'Signup';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once __DIR__ . '/../includes/db_connection.php';
include_once '../includes/db_connection.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Validate input
    if ($password !== $confirmPassword) {
        $error = "Passwords do not match!";
    } else {
        $conn = getDBConnection();
        
        // Check if username exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        if ($stmt->get_result()->num_rows > 0) {
            $error = "Username already exists!";
        }

        // Check if email exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        if ($stmt->get_result()->num_rows > 0) {
            $error = "Email already registered!";
        }

        if (empty($error)) {
            // Hash password
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            
            // Insert new user
            $stmt = $conn->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $passwordHash);
            
            if ($stmt->execute()) {
                $success = "Account created successfully! You can now login.";
            } else {
                $error = "Error creating account. Please try again.";
            }
        }
        $conn->close();
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageTitle) ? "URBN ART - " . $pageTitle : 'URBN ART'; ?></title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/print.css" media="print" />
    <script type="text/javascript" src="../js/validation.js"></script>
    <script type="text/javascript" src="../js/gallery.js"></script>
</head>

<body>
<?php include_once '../includes/header.php'; ?>
<div class="main">

<div class="signup-container">
    <div class="signup-box">
        <div class="auth-content">
            <div class="signup-logo">
                <img src="../images/URBN ARTWhite.png" alt="URBN ART Logo"/>
            </div>
            <h2>Create Account</h2>
        </div>

        <?php if ($error): ?>
            <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="success-message"><?php echo htmlspecialchars($success); ?></div>
        <?php endif; ?>

        <form method="post" action="signup.php">
            <fieldset>
               
                    <label for="username">Username <span class="required">*</span></label>
                    <input type="text" id="username" name="username" class="required" />
                
                
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="text" id="email" name="email" class="required" />
                
                
                    <label for="password">Password <span class="required">*</span></label>
                    <input type="password" id="password" name="password" class="required" />
                
                
                    <label for="confirm-password">Confirm Password <span class="required">*</span></label>
                    <input type="password" id="confirm-password" name="confirm-password" class="required" />
               
                
                    <input type="submit" value="Sign Up" />
                
            </fieldset>
        </form>
        <p>Already have an account? <a href="login.php">Login here.</a></p>
    </div>
</div>

</div>
<?php include_once '../includes/footer.php'; ?>

</body>
</html>