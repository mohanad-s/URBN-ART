<?php
include_once __DIR__ . '/db_connection.php';
?>
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
                            $cart_conn = getDBConnection();
                            $cart_stmt = $conn->prepare("SELECT COUNT(*) as count FROM cart WHERE user_id = ?");
                            $cart_stmt->bind_param("i", $_SESSION['user_id']);
                            $cart_stmt->execute();
                            $cart_result = $cart_stmt->get_result();
                            $count = $cart_result->fetch_assoc()['count'];
                        if($count > 0):
                        ?>
                            <span class="cart-count"><?php echo $count; ?></span>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endif; ?>
        </div>

        <div class="header-buttons">
            <button type="button" onclick="window.location.href='/includes/index.php'" class="nav-btn">Home</button>
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
   