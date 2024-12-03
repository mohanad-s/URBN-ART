<?php
$pageTitle = 'Feedback';
include_once '../includes/header.php';

// Initialize error message variable
$errorMsg = '';

// Check if there's an error message in the session
if (isset($_SESSION['feedback_error'])) {
    $errorMsg = $_SESSION['feedback_error'];
    unset($_SESSION['feedback_error']); // Clear the error message
}
?>

<div class="feedback-container">
    <h2>Share Your Experience with URBN ART</h2>
    
    <?php if ($errorMsg): ?>
        <div class="error-message"><?php echo htmlspecialchars($errorMsg); ?></div>
    <?php endif; ?>

    <form id="feedbackForm" action="process_feedback.php" method="POST" onsubmit="return validateForm()">
        <!-- Personal Information Fieldset -->
        <fieldset>
            <legend>Personal Information</legend>
            
            <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="city">City *</label>
                <input type="text" id="city" name="city" required>
            </div>

            <div class="form-group">
                <label>Are you an artist? *</label>
                <div class="radio-group">
                    <input type="radio" id="artist_yes" name="is_artist" value="yes" required>
                    <label for="artist_yes">Yes</label>
                    <input type="radio" id="artist_no" name="is_artist" value="no">
                    <label for="artist_no">No</label>
                </div>
            </div>

            <div class="form-group">
                <label>Type of Art *</label>
                <div class="radio-group">
                    <input type="radio" id="art_graffiti" name="art_type" value="graffiti" required>
                    <label for="art_graffiti">Graffiti</label>
                    <input type="radio" id="art_other" name="art_type" value="other">
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
                    <input type="checkbox" id="product_spray" name="products[]" value="spray">
                    <label for="product_spray">Spray Paints</label>
                    
                    <input type="checkbox" id="product_bags" name="products[]" value="bags">
                    <label for="product_bags">Graffiti Bags</label>
                </div>
            </div>

            <div class="form-group">
                <label for="purchase_frequency">How often do you purchase art supplies? *</label>
                <select id="purchase_frequency" name="purchase_frequency" required>
                    <option value="">Please select</option>
                    <option value="weekly">Weekly</option>
                    <option value="monthly">Monthly</option>
                    <option value="quarterly">Every 3-4 months</option>
                    <option value="yearly">Yearly</option>
                </select>
            </div>

            <div class="form-group">
                <label for="feedback">Your Feedback *</label>
                <textarea id="feedback" name="feedback" rows="5" required></textarea>
            </div>
        </fieldset>

        <button type="submit">Submit Feedback</button>
    </form>
</div>

<?php include_once '../includes/footer.php'; ?>