<?php
session_start();
include_once '../includes/db_connection.php';

if (!isset($_SESSION['user_id'])) {
    die(json_encode(['error' => 'Please log in']));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cart_id'])) {
    $cart_id = $_POST['cart_id'];
    $user_id = $_SESSION['user_id'];
    
    $conn = getDBConnection();
    
    // Start transaction
    $conn->begin_transaction();
    
    try {
        // Get product_id from cart before deleting
        $stmt = $conn->prepare("SELECT product_id FROM cart WHERE id = ? AND user_id = ?");
        $stmt->bind_param("ii", $cart_id, $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $cart_item = $result->fetch_assoc();
        
        if (!$cart_item) {
            throw new Exception("Cart item not found");
        }
        
        // Delete from cart
        $stmt = $conn->prepare("DELETE FROM cart WHERE id = ? AND user_id = ?");
        $stmt->bind_param("ii", $cart_id, $user_id);
        $stmt->execute();
        
        // Increase stock
        $stmt = $conn->prepare("UPDATE products SET stock_quantity = stock_quantity + 1 WHERE id = ?");
        $stmt->bind_param("i", $cart_item['product_id']);
        $stmt->execute();
        
        $conn->commit();
        echo json_encode(['success' => true]);
        
    } catch (Exception $e) {
        $conn->rollback();
        echo json_encode(['error' => $e->getMessage()]);
    }
    
    $conn->close();
}
?>