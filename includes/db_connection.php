<?php
function getDBConnection() {
    try {
        // Get database URL from environment variable
        $url = getenv('MYSQL_URL');
        
        if (!$url) {
            throw new Exception("Database URL not found in environment");
        }
        
        // Parse the database URL
        $dbParts = parse_url($url);
        
        $host = $dbParts['host'];
        $username = $dbParts['user'];
        $password = $dbParts['pass'];
        $database = ltrim($dbParts['path'], '/');
        
        // Create connection
        $conn = new mysqli($host, $username, $password, $database);
        
        // Check connection
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }
        
        // Set charset
        $conn->set_charset("utf8mb4");
        
        return $conn;
    } catch (Exception $e) {
        error_log("Database connection error: " . $e->getMessage());
        die("Database connection failed. Please try again later.");
    }
}
?>