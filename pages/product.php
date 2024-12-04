<?php
$pageTitle = 'Product Details';
include_once __DIR__ . '/db_connection.php';
include_once '../includes/db_connection.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Get the product ID from URL
$product_id = isset($_GET['id']) ? $_GET['id'] : 0;

// Get product from database
$conn = getDBConnection();
$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

// If product doesn't exist, redirect to products page
if (!$product) {
    header("Location: products.php");
    exit();
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
    <link rel="stylesheet" type="text/css" href="/CSS/style.css" />
    <link rel="stylesheet" type="text/css" href="/CSS/print.css" media="print" />
    <script type="text/javascript" src="../js/validation.js"></script>
    <script type="text/javascript" src="../js/gallery.js"></script>
</head>

<body>
<?php include_once '../includes/header.php'; ?>
<div class="main">
<div class="back-link">
    <a href="/pages/products.php">Back to Products</a>
</div>

<div class="item-details">
    <!-- Product Image -->
    <div class="item-image">
        <img src="<?php echo htmlspecialchars($product['image_path']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
    </div>

    <!-- Product Information -->
    <div class="item-info">
        <h1><?php echo htmlspecialchars($product['name']); ?></h1>
        <p><?php echo nl2br(htmlspecialchars($product['description'])); ?></p>

        <!-- Product Details -->
        <div class="product-meta">
            <p><strong>Category:</strong> <?php echo htmlspecialchars($product['category']); ?></p>
            <p><strong>Availability:</strong> 
                <?php echo $product['stock_quantity'] > 0 ? 'In Stock (' . $product['stock_quantity'] . ' available)' : 'Out of Stock'; ?>
            </p>
            <p><strong>Price:</strong> <?php echo number_format($product['price'], 2); ?> SAR</p>
        </div>

        <?php if ($product['stock_quantity'] > 0): ?>
    <button type="button" onclick="addToCart(<?php echo $product['id']; ?>)">Add to Cart</button>
<?php else: ?>
    <button disabled>Out of Stock</button>
<?php endif; ?>
    </div>
    <script>
function addToCart(productId) {
    console.log('Adding product ID:', productId); // Debug line
    
    fetch('add_to_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'product_id=' + productId
    })
    .then(response => {
        console.log('Response:', response); // Debug line
        return response.json();
    })
    .then(data => {
        console.log('Data:', data); // Debug line
        if (data.success) {
            alert('Item added to cart successfully!');
            location.reload();
        } else {
            alert(data.error || 'Error adding item to cart');
        }
    })
    .catch(error => {
        console.error('Error:', error); // Debug line
        alert('Error adding item to cart');
    });
}
</script>
</div>

</div>
<?php include_once '../includes/footer.php'; ?>
</body>
</html>