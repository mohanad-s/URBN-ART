<?php
$pageTitle = 'Shopping Cart';
include_once '../includes/header.php';
include_once '../includes/db_connection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$conn = getDBConnection();
$stmt = $conn->prepare("
    SELECT c.id as cart_id, p.*, c.quantity 
    FROM cart c 
    JOIN products p ON c.product_id = p.id 
    WHERE c.user_id = ?
");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();
?>

<section class="shopping-cart">
    <h1>Your Shopping Cart</h1>
    
    <?php if ($result->num_rows === 0): ?>
        <p class="empty-cart">Your cart is empty</p>
    <?php else: ?>
        <div class="cart-items">
            <?php while($item = $result->fetch_assoc()): ?>
                <div class="cart-item" id="cart-item-<?php echo $item['cart_id']; ?>">
                    <img src="<?php echo htmlspecialchars($item['image_path']); ?>" 
                         alt="<?php echo htmlspecialchars($item['name']); ?>">
                    <div class="cart-item-info">
                        <h2><?php echo htmlspecialchars($item['name']); ?></h2>
                        <p><?php echo number_format($item['price'], 2); ?> SAR</p>
                    </div>
                    <button class="delete-btn" onclick="removeFromCart(<?php echo $item['cart_id']; ?>)">Remove</button>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>

<script>
function removeFromCart(cartId) {
    if (confirm('Are you sure you want to remove this item?')) {
        fetch('/pages/remove_from_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `cart_id=${cartId}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById(`cart-item-${cartId}`).remove();
                // Update cart count in header
                location.reload();
            } else {
                alert(data.error);
            }
        });
    }
}
</script>

<?php include_once '../includes/footer.php'; ?>