<?php 
$pageTitle = 'Services';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once __DIR__ . '../includes/db_connection.php';
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

<div class="services-menu">
    <h2>Our Services</h2>

    <div class="menu-buttons">
        <button onclick="window.location.href='../includes/index.php'"><b>Home</b></button>
        <button onclick="window.location.href='products.php'"><b>Products</b></button>
        <button onclick="window.location.href='videos.php'"><b>Video Tutorials</b></button>
        <button onclick="window.location.href='gallery.php'"><b>Gallery</b></button>
        <button onclick="window.location.href='workshops.php'"><b>Workshops</b></button>
        <button onclick="window.location.href='cart.php'"><b>Shopping Cart</b></button>
        <button onclick="window.location.href='contact.php'"><b>Contact Us</b></button>
        <button onclick="window.location.href='resume.php'"><b>About Owner</b></button>
        <button onclick="window.location.href='feedback.php'"><b>Give Us Your Feedback!</b></button>
    </div>
</div>
</div>
<?php
include_once '../includes/footer.php';
?>
</body>
</html>