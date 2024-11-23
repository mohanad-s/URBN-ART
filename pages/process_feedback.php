<?php
session_start();
require_once '../includes/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = getDBConnection();
    
    // Sanitize input
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $phone = $conn->real_escape_string(trim($_POST['phone']));
    $city = $conn->real_escape_string(trim($_POST['city']));
    $isArtist = $conn->real_escape_string($_POST['is_artist']);
    $artType = $conn->real_escape_string($_POST['art_type']);
    $purchaseFrequency = $conn->real_escape_string($_POST['purchase_frequency']);
    $feedback = $conn->real_escape_string(trim($_POST['feedback']));
    $products = isset($_POST['products']) ? implode(',', array_map([$conn, 'real_escape_string'], $_POST['products'])) : '';

    // Check if email already exists
    $checkEmail = $conn->prepare("SELECT id FROM feedback WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['feedback_error'] = "This email has already submitted feedback. Thank you for your interest!";
        header("Location: feedback.php");
        exit();
    }

    // Insert feedback
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, phone, city, is_artist, art_type, products, purchase_frequency, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $name, $email, $phone, $city, $isArtist, $artType, $products, $purchaseFrequency, $feedback);

    if ($stmt->execute()) {
        $_SESSION['feedback_success'] = "Thank you for your feedback!";
        header("Location: feedback.php");
    } else {
        $_SESSION['feedback_error'] = "Sorry, there was an error submitting your feedback. Please try again.";
        header("Location: feedback.php");
    }

    $stmt->close();
    $conn->close();
}
?>