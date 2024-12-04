<?php
$pageTitle = 'Feedback';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once __DIR__ . '/../includes/db_connection.php';

// Initialize error message variable
$errorMsg = '';

// Check if there's an error message in the session
if (isset($_SESSION['feedback_error'])) {
    $errorMsg = $_SESSION['feedback_error'];
    unset($_SESSION['feedback_error']); // Clear the error message
}
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

<div class="feedback-container">
    <h2>Share Your Experience with URBN ART</h2>
    
    <?php if ($errorMsg): ?>
        <div class="error-message"><?php echo htmlspecialchars($errorMsg); ?></div>
    <?php endif; ?>

    <form id="feedbackForm" action="process_feedback.php" method="post" onsubmit="return validateForm()">
        <!-- Personal Information Fieldset -->
        <fieldset>
            <legend>Personal Information</legend>
            
            <div class="form-group">
            <label for="name">Full Name <span class="required">*</span></label>
            <input type="text" id="name" name="name" class="required" />
            </div>

            <div class="form-group">
            <label for="email">Email Address <span class="required">*</span></label>
            <input type="text" id="email" name="email" class="required" />
            </div>

            <div class="form-group">
            <label for="phone">Phone Number <span class="required">*</span></label>
            <input type="text" id="phone" name="phone" class="required" />
            </div>

            <div class="form-group">
            <label for="city">City <span class="required">*</span></label>
            <input type="text" id="city" name="city" class="required" />
            </div>

            <div class="form-group">
            <label>Are you an artist? <span class="required">*</span></label>
                <div class="radio-group">
                <input type="radio" id="artist_yes" name="is_artist" value="yes" class="required" />
                <label for="artist_yes">Yes</label>
                <input type="radio" id="artist_no" name="is_artist" value="no" />
                <label for="artist_no">No</label>
                </div>
            </div>

            <div class="form-group">
            <label>Type of Art <span class="required">*</span></label>
                <div class="radio-group">
                <input type="radio" id="art_graffiti" name="art_type" value="graffiti" class="required" />
                <label for="art_graffiti">Graffiti</label>
                <input type="radio" id="art_other" name="art_type" value="other" />
                <label for="art_other">Other</label>
                </div>
            </div>
        </fieldset>

        <!-- Product Feedback Fieldset -->
        <fieldset>
            <legend>Product Feedback</legend>

            <div class="form-group">
                <label>What products have you tried? (Check all that apply)</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="product_spray" name="products[]" value="spray"/>
                    <label for="product_spray">Spray Paints</label>
                    
                    <input type="checkbox" id="product_bags" name="products[]" value="bags"/>
                    <label for="product_bags">Graffiti Bags</label>
                </div>
            </div>

            <div class="form-group">
            <label for="purchase_frequency">How often do you purchase art supplies? <span class="required">*</span></label>
            <select id="purchase_frequency" name="purchase_frequency" class="required">
                    <option value="">Please select</option>
                    <option value="weekly">Weekly</option>
                    <option value="monthly">Monthly</option>
                    <option value="quarterly">Every 3-4 months</option>
                    <option value="yearly">Yearly</option>
                </select>
            </div>

            <div class="form-group">
            <label for="feedback">Your Feedback <span class="required">*</span></label>
            <textarea id="feedback" name="feedback" rows="5" class="required"></textarea>
            </div>
        </fieldset>

        <input type="submit" value="Submit Feedback" />
    </form>
</div>

</div>
<?php include_once '../includes/footer.php'; ?>
</body>
</html>