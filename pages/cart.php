<?php
session_start();
// Check login before any output
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
$pageTitle = 'Shopping Cart';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once __DIR__ . '/../includes/db_connection.php';
include_once '../includes/db_connection.php';

// Get cart items
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

// Calculate totals
$subtotal = 0;
$cart_items = [];
while ($item = $result->fetch_assoc()) {
    $cart_items[] = $item;
    $subtotal += $item['price'];
}
$vat = $subtotal * 0.15; // 15% VAT
$delivery = 15; // Fixed delivery charge
$grand_total = $subtotal + $vat + $delivery;
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

<h1>Shopping Cart</h1>
<div class="shopping-cart">
    <!-- Cart Items -->
    <div class="cart-items">
        <?php if (empty($cart_items)): ?>
            <p>Your cart is empty</p>
        <?php else: ?>
            <?php foreach ($cart_items as $item): ?>
                <div class="cart-item" id="cart-item-<?php echo $item['cart_id']; ?>">
                    <img src="<?php echo htmlspecialchars($item['image_path']); ?>" 
                         alt="<?php echo htmlspecialchars($item['name']); ?>">
                    <div class="cart-item-info">
                        <h2><?php echo htmlspecialchars($item['name']); ?></h2>
                        <p><?php echo number_format($item['price'], 2); ?> SAR</p>
                    </div>
                    <img class="delete-icon" 
                         src="../images/delete.png" 
                         alt="Delete" 
                         onclick="removeFromCart(<?php echo $item['cart_id']; ?>)">
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- Cost Breakdown -->
    <?php if (!empty($cart_items)): ?>
        <div class="cost-breakdown">
            <p>Subtotal: <?php echo number_format($subtotal, 2); ?> SAR</p>
            <p>VAT: <?php echo number_format($vat, 2); ?> SAR</p>
            <p>Delivery: <?php echo number_format($delivery, 2); ?> SAR</p>
            <div class="grand-total">
                <p>Grand total: <?php echo number_format($grand_total, 2); ?> SAR</p>
            </div>
            <button class="pay-now-btn" onclick="proceedToCheckout()">Pay Now</button>
        </div>
    <?php endif; ?>
    </div>

<script>
function removeFromCart(cartId) {
    if (confirm('Are you sure you want to remove this item?')) {
        fetch('remove_from_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'cart_id=' + cartId
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Remove item from display
                document.getElementById('cart-item-' + cartId).remove();
                
                // If cart is empty, refresh page to show empty state
                if (document.querySelectorAll('.cart-item').length === 0) {
                    location.reload();
                }
            } else {
                alert(data.error || 'Error removing item');
            }
        });
    }
}

function proceedToCheckout() {
    // You can implement checkout functionality here
    alert('Checkout functionality coming soon!');
}
</script>
<script>
function addToCart(productId) {
    fetch('add_to_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'product_id=' + productId
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Item added to cart successfully!');
            // Refresh the page to update stock display
            location.reload();
        } else {
            alert(data.error || 'Error adding item to cart');
        }
    })
    .catch(error => {
        alert('Error adding item to cart');
        console.error('Error:', error);
    });
}
</script>

</div>
<?php include_once '../includes/footer.php'; ?>
</body>
</html>