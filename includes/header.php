<?php
session_start();
include_once __DIR__ . '/db_connection.php';  // Add this line
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? "URBN ART - " . $pageTitle : 'URBN ART'; ?></title>
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/css/print.css" media="print">
    <script src="../js/validation.js"></script>
    <script src="../js/gallery.js"></script>
</head>
<body>
    <header>
        <div class="header-logo <?php echo isset($logoClass) ? $logoClass : ''; ?>">
            <img src="/images/URBN ARTBlack.png" alt="URBN ART Logo">
        </div>
        <div class="header-img"></div>

         <!-- Welcome message and cart icon -->
    <div class="user-section">
        <?php if(isset($_SESSION['user_id'])): ?>
            <span class="welcome-message">Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
            <a href="/pages/cart.php" class="cart-icon">
            <div class="cart-wrapper">
                    🛒
                    <?php
                    // Get cart count
                    $conn = getDBConnection();
                    $stmt = $conn->prepare("SELECT COUNT(*) as count FROM cart WHERE user_id = ?");
                    $stmt->bind_param("i", $_SESSION['user_id']);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $count = $result->fetch_assoc()['count'];
                    if($count > 0):
                    ?>
                        <span class="cart-count"><?php echo $count; ?></span>
                    <?php endif; ?>
                </div>
            </a>
        <?php endif; ?>
    </div>

        <div class="header-buttons">
            <button onclick="window.location.href='../includes/index.php'" class="nav-btn">Home</button>
            <button onclick="window.location.href='/pages/services.php'" class="nav-btn">Services</button>
            <div class="auth-buttons">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <button onclick="window.location.href='/pages/logout.php'">Logout</button>
                <?php else: ?>
                    <button onclick="window.location.href='/pages/login.php'">Login</button>
                    <button onclick="window.location.href='/pages/signup.php'">Sign Up</button>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <main>