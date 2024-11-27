<?php
$pageTitle = 'Workshop Schedule';
include_once '../includes/header.php';
?>

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

<?php include_once '../includes/footer.php'; ?>