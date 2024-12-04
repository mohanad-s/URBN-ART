<?php
$pageTitle = 'Owner Resume';
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

<div class="resume-container">
    <div class="resume-header">
        <h2>About The Owner</h2>
        <p>Meet Mohanad Sulaiman Al Dakheel, the founder and creative force behind URBN ART</p>
    </div>

    <div class="owner-info">
        <div class="owner-description">
            <h3>Vision & Leadership</h3>
            <p>As the founder of URBN ART, Mohanad has revolutionized the graffiti art supply industry in Saudi Arabia. 
            With a passion for urban art and a keen understanding of artists' needs, he established the first dedicated 
            graffiti supplies brand in the country.</p>
        </div>
    </div>

    <div class="resume-viewer">
        <h3>Professional Resume</h3>
        <div class="pdf-container">
            <object
                data="../documents/Mohanad_AlDakheel__Resume.pdf"
                type="application/pdf"
                class="pdf-viewer">
                <p>It appears you don't have a PDF plugin for this browser. 
                No worries! You can <a href="../documents/Mohanad_AlDakheel__Resume.pdf">click here to download the PDF file</a>.</p>
            </object>
        </div>
    </div>
</div>

</div>
<?php include_once '../includes/footer.php'; ?>
</body>
</html>