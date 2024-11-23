<?php
// security.php - Place in includes directory
class Security {
    // CSRF token generation
    public static function generateCSRFToken() {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    // CSRF token validation
    public static function validateCSRFToken($token) {
        if (!isset($_SESSION['csrf_token']) || $token !== $_SESSION['csrf_token']) {
            throw new Exception('CSRF token validation failed');
        }
        return true;
    }

    // XSS prevention
    public static function sanitizeOutput($data) {
        if (is_array($data)) {
            return array_map([self::class, 'sanitizeOutput'], $data);
        }
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }

    // Password hashing
    public static function hashPassword($password) {
        return password_hash($password, PASSWORD_ARGON2ID);
    }

    // Password verification
    public static function verifyPassword($password, $hash) {
        return password_verify($password, $hash);
    }
}

// Session handling
session_start();
if (empty($_SESSION['last_activity']) || time() - $_SESSION['last_activity'] > 1800) {
    session_regenerate_id(true);
}
$_SESSION['last_activity'] = time();