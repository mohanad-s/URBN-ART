<?php
// Database connection configuration
$dbUrl = getenv('MYSQL_URL');
$dbPublicUrl = getenv('MYSQL_PUBLIC_URL');

try {
    // Parse the URL to get connection details
    $dbComponents = parse_url($dbUrl);
    
    $host = $dbComponents['host'];
    $username = $dbComponents['user'];
    $password = $dbComponents['pass'];
    $database = ltrim($dbComponents['path'], '/');
    
    // Create connection
    $conn = new mysqli($host, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    
    // Set charset to utf8mb4
    $conn->set_charset("utf8mb4");
    
} catch (Exception $e) {
    // Log the error securely (don't expose details to users)
    error_log("Database connection error: " . $e->getMessage());
    die("Sorry, there was a problem connecting to the database.");
}

// Function to prevent SQL injection
function sanitizeInput($conn, $input) {
    if (is_array($input)) {
        return array_map(function($item) use ($conn) {
            return sanitizeInput($conn, $item);
        }, $input);
    }
    return $conn->real_escape_string(trim($input));
}
?>