<?php
$pageTitle = 'Contact Us';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once __DIR__ . '/../includes/db_connection.php';
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

<div class="back-link">
    <a href="../includes/index.php">Back to Home</a>
</div>

<div class="contact-info">
    <h2>Contact Information</h2>
    <p><strong>Owner:</strong> Mohanad Sulaiman Al Dakheel</p>
    <p><strong>Phone:</strong> +966 555 5555 9999</p>
    <p><strong>Address:</strong> Jeddah, Saudi Arabia</p>
    <p><strong>Email:</strong> <a href="mailto:mohannadaldakheel3.5@gmail.com">mohannadaldakheel3.5@gmail.com</a></p>
</div>

<div class="social-media">
    <h3>Follow Us</h3>
    <ul>
        <li>Instagram: @URBN_ART</li>
        <li>Twitter: @URBN_ART</li>
        <li>Facebook: URBN ART Graffiti</li>
    </ul>
</div>

</div>
<?php include_once '../includes/footer.php'; ?>
</body>
</html>