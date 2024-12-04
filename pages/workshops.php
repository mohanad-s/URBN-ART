<?php
$pageTitle = 'Workshop Schedule';
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

<div class="schedule-container">
    <h2>URBN ART Workshop Schedule</h2>
    
    <table class="workshop-table">
        <thead>
            <tr>
                <th rowspan="2">Date</th>
                <th rowspan="2">Workshop</th>
                <th colspan="2">Session Time</th>
                <th rowspan="2">Location</th>
                <th rowspan="2">Price (SAR)</th>
            </tr>
            <tr>
                <th>Start</th>
                <th>End</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="2">Dec 1, 2024</td>
                <td>Beginner Graffiti</td>
                <td>10:00</td>
                <td>12:00</td>
                <td>Jeddah Art Center</td>
                <td>250</td>
            </tr>
            <tr>
                <td>Advanced Techniques</td>
                <td>14:00</td>
                <td>17:00</td>
                <td>Jeddah Art Center</td>
                <td>350</td>
            </tr>
            <tr>
                <td rowspan="3">Dec 8, 2024</td>
                <td>Chrome Effects</td>
                <td>09:00</td>
                <td>11:00</td>
                <td rowspan="3">URBN Studio</td>
                <td>300</td>
            </tr>
            <tr>
                <td>Mural Design</td>
                <td>12:00</td>
                <td>15:00</td>
                <td>400</td>
            </tr>
            <tr>
                <td>Digital Graffiti</td>
                <td>16:00</td>
                <td>18:00</td>
                <td>275</td>
            </tr>
            <tr>
                <td colspan="5">Special Holiday Workshop Pack (All Sessions)</td>
                <td>1200</td>
            </tr>
        </tbody>
    </table>

    <div class="table-actions">
        <button onclick="window.print()" class="print-button">Print Schedule</button>
    </div>
</div>

</div>
<?php include_once '../includes/footer.php'; ?>

</body>
</html>