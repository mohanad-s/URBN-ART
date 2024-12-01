<?php
$pageTitle = 'Product Details';
include_once '../includes/header.php';
include_once '../includes/db_connection.php';

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

<div class="back-link">
    <a href="/pages/products.php">Back to Products</a>
</div>

<section class="item-details">
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
            <button onclick="addToCart(<?php echo $product['id']; ?>)">Add to Cart</button>
        <?php else: ?>
            <button disabled>Out of Stock</button>
        <?php endif; ?>
    </div>
</section>

<?php include_once '../includes/footer.php'; ?>