<?php
$pageTitle = 'Video Tutorials';
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

<div class="video-container">
    <h2>URBN ART Video Tutorials</h2>
    
    <div class="video-grid">
        <div class="video-item">
            <h3> URBN ART CONCRETE Effect</h3>
            <div class="video-wrapper">
                <object 
                    data="https://www.youtube.com/embed/V5HjUjf4l5E" 
                    width="560" 
                    height="315">
                    <param name="movie" value="https://www.youtube.com/embed/V5HjUjf4l5E">
                    <param name="allowFullScreen" value="true">
                    <param name="allowscriptaccess" value="always">
                    <embed 
                        src="https://www.youtube.com/embed/V5HjUjf4l5E" 
                        type="application/x-shockwave-flash" 
                        allowscriptaccess="always" 
                        allowfullscreen="true" 
                        width="560" 
                        height="315">
                </object>
            </div>
            <p>Master the Concrete effect with our premium spray paint - Step by step tutorial.</p>
        </div>

        <div class="video-item">
            <h3>URBN ART DUSTCLEAN Spray</h3>
            <div class="video-wrapper">
                <object 
                    data="https://www.youtube.com/embed/_Yxa0Si02YE" 
                    width="560" 
                    height="315">
                    <param name="movie" value="https://www.youtube.com/embed/_Yxa0Si02YE">
                    <param name="allowFullScreen" value="true">
                    <param name="allowscriptaccess" value="always">
                    <embed 
                        src="https://www.youtube.com/embed/_Yxa0Si02YE" 
                        type="application/x-shockwave-flash" 
                        allowscriptaccess="always" 
                        allowfullscreen="true" 
                        width="560" 
                        height="315">
                </object>
            </div>
            <p> The highly-pure and dry DUSTCLEAN spray leaves no residues. Do not use on electronic devices.</p>
        </div>

        <div class="video-item">
            <h3>HOW TO USE URBN ART RUST Effect</h3>
            <div class="video-wrapper">
                <object 
                    data="https://www.youtube.com/embed/Qp6UX_RUUJE" 
                    width="560" 
                    height="315">
                    <param name="movie" value="https://www.youtube.com/embed/Qp6UX_RUUJE">
                    <param name="allowFullScreen" value="true">
                    <param name="allowscriptaccess" value="always">
                    <embed 
                        src="https://www.youtube.com/embed/Qp6UX_RUUJE" 
                        type="application/x-shockwave-flash" 
                        allowscriptaccess="always" 
                        allowfullscreen="true" 
                        width="560" 
                        height="315">
                </object>
            </div>
            <p>Master the Rust effect with our premium spray paint - Step by step tutorial.</p>
        </div>
    </div>
</div>

</div>
<?php include_once '../includes/footer.php'; ?>

</body>
</html>