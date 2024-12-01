<?php
session_start();
include_once '../includes/db_connection.php';

if (!isset($_SESSION['user_id'])) {
    die(json_encode(['error' => 'Please log in to add items to cart']));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user_id'];
    
    $conn = getDBConnection();
    
    // Start transaction
    $conn->begin_transaction();
    
    try {
        // Check stock
        $stmt = $conn->prepare("SELECT stock_quantity FROM products WHERE id = ? FOR UPDATE");
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        
        if ($product['stock_quantity'] <= 0) {
            throw new Exception("Product is out of stock");
        }
        
        // Add to cart
        $stmt = $conn->prepare("INSERT INTO cart (user_id, product_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $user_id, $product_id);
        $stmt->execute();
        
        // Decrease stock
        $stmt = $conn->prepare("UPDATE products SET stock_quantity = stock_quantity - 1 WHERE id = ?");
        $stmt->bind_param("i", $product_id);
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