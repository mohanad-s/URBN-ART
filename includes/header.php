<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once __DIR__ . '/db_connection.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageTitle) ? "URBN ART - " . $pageTitle : 'URBN ART'; ?></title>
    <link rel="stylesheet" type="text/css" href="/CSS/style.css" />
    <link rel="stylesheet" type="text/css" href="/CSS/print.css" media="print" />
    <script type="text/javascript" src="../js/validation.js"></script>
    <script type="text/javascript" src="../js/gallery.js"></script>
</head>
<body>
    <div class="header">
        <div class="header-logo <?php echo isset($logoClass) ? $logoClass : ''; ?>">
            <img src="/images/URBN%20ARTBlack.png" alt="URBN ART Logo" />
        </div>
        <div class="header-img"></div>

        <div class="user-section">
            <?php if(isset($_SESSION['user_id'])): ?>
                <span class="welcome-message">Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                <a href="/pages/cart.php" class="cart-icon">
                    <div class="cart-wrapper">
                        🛒
                        <?php
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
            <button type="button" onclick="window.location.href='/pages/index.php'" class="nav-btn">Home</button>
            <button type="button" onclick="window.location.href='/pages/services.php'" class="nav-btn">Services</button>
            <div class="auth-buttons">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <button type="button" onclick="window.location.href='/pages/logout.php'">Logout</button>
                <?php else: ?>
                    <button type="button" onclick="window.location.href='/pages/login.php'">Login</button>
                    <button type="button" onclick="window.location.href='/pages/signup.php'">Sign Up</button>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="main">