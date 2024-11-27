<?php
session_start();?>
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
</head>
<body>
    <header>
        <div class="header-logo <?php echo isset($logoClass) ? $logoClass : ''; ?>">
            <img src="/images/URBN ARTBlack.png" alt="URBN ART Logo">
        </div>
        <div class="header-img"></div>
        <div class="auth-buttons">
            <?php if(isset($_SESSION['user_id'])): ?>
                <button onclick="window.location.href='/pages/logout.php'">Logout</button>
            <?php else: ?>
                <button onclick="window.location.href='/pages/login.php'">Login</button>
                <button onclick="window.location.href='/pages/signup.php'">Sign Up</button>
            <?php endif; ?>
        </div>
    </header>
    <main>