<?php
$pageTitle = 'Gallery';
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

<div class="gallery-container">
    <h2>URBN ART Gallery</h2>

    <!-- Main display area for large image -->
    <div class="gallery-main">
        <img id="mainImage" src="../images/gallery6.jpg" alt="URBN BLACK - POWERCOLOR"/>
        <h3 id="imageTitle">URBN BLACK - POWERCOLORS</h3>
    </div>

    <!-- Thumbnails container -->
    <div class="thumbnails-container">
        <div class="thumbnail" onclick="changeImage('../images/gallery5.jpg', 'URBN BLACK - AESTHETICS')">
            <img src="../images/gallery5.jpg" alt="URBN BLACK - AESTHETICS"/>
        </div>
        <div class="thumbnail" onclick="changeImage('../images/gallery4.jpg', 'URBN ART COMMUNITY - ART WORK BY JOHN DOE')">
            <img src="../images/gallery4.jpg" alt="URBN ART COMMUNITY - ART WORK BY JOHN DOE"/>
        </div>
        <div class="thumbnail" onclick="changeImage('../images/gallery3.jpg', 'URBN ART COMMUNITY - ART WORK BY JANE DOE')">
            <img src="../images/gallery3.jpg" alt="URBN ART COMMUNITY - ART WORK BY JANE DOE"/>
        </div>
        <div class="thumbnail" onclick="changeImage('../images/gallery2.webp', 'URBN Gold - TESTING')">
            <img src="../images/gallery2.webp" alt="URBN Gold - TESTING"/>
        </div>
        <div class="thumbnail" onclick="changeImage('../images/gallery1.jpg', 'URBN SMILEY - SPECIAL EDITION CAN!')">
            <img src="../images/gallery1.jpg" alt="URBN SMILEY - SPECIAL EDITION CAN!"/>
        </div>
        <div class="thumbnail" onclick="changeImage('/images/URBN ART_Gloves.png', 'URBN Nylon Gloves')">
            <img src="../images/URBN%20ART_Gloves.png" alt="URBN Nylon Gloves"/>
        </div>
        <div class="thumbnail" onclick="changeImage('/images/URBN ART_Ink.png', 'URBN Bold Ink')">
            <img src="../images/URBN%20ART_Ink.png" alt="URBN Bold Ink"/>
        </div>
        <div class="thumbnail" onclick="changeImage('/images/URBN ART_Bag.png', 'URBN Cotton Bag')">
            <img src="../images/URBN%20ART_Bag.png" alt="URBN Cotton Bag"/>
        </div>
    </div>

    <!-- Navigation buttons -->
    <div class="gallery-nav">
        <button onclick="prevImage()" class="nav-button">Previous</button>
        <button onclick="nextImage()" class="nav-button">Next</button>
    </div>
</div>

</div>
<?php include_once '../includes/footer.php'; ?>
</body>
</html>