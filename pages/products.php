<?php
$pageTitle = 'Products';
include_once '../includes/header.php';
include_once '../includes/db_connection.php';

// Get all products from database
$conn = getDBConnection();
$stmt = $conn->prepare("SELECT * FROM products ORDER BY id");
$stmt->execute();
$result = $stmt->get_result();
?>

<div class="back-link">
    <a href="/pages/index.php">Back to Home</a>
</div>

<main>
    <h2>Products</h2>
    <section class="products-grid">
        <?php while ($product = $result->fetch_assoc()): ?>
            <div class="product-item">
                <a href="product.php?id=<?php echo $product['id']; ?>">
                    <img src="<?php echo htmlspecialchars($product['image_path']); ?>" 
                         alt="<?php echo htmlspecialchars($product['name']); ?>"
                         class="<?php echo strpos($product['category'], 'Accessories') !== false ? 'large-image' : ''; ?> hover-effect">
                </a>
                <p><?php echo htmlspecialchars($product['name']); ?></p>
                <p class="price"><?php echo number_format($product['price'], 2); ?> SAR</p>
            </div>
        <?php endwhile; ?>
    </section>
</main>

<?php 
$conn->close();
include_once '../includes/footer.php'; 
?>