<?php
require_once '../includes/db_connection.php';

// Get product slug from URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// Get product details from database
$conn = getDBConnection();
$stmt = $conn->prepare("SELECT * FROM products WHERE slug = ?");
$stmt->bind_param("s", $slug);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if (!$product) {
    // Product not found, redirect to products page
    header("Location: products.php");
    exit();
}

$pageTitle = $product['name'];
include_once '../includes/header.php';
?>

<div class="back-link">
    <a href="/pages/products.php">Back to Products</a>
</div>

<section class="item-details">
    <div class="item-image">
        <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
    </div>

    <div class="item-info">
        <h1><?php echo htmlspecialchars($product['name']); ?></h1>
        <h2><?php echo htmlspecialchars($product['short_description']); ?></h2>
        <p><?php echo nl2br(htmlspecialchars($product['description'])); ?></p>

        <ul>
            <li><strong>Content:</strong> <?php echo htmlspecialchars($product['content_volume']); ?></li>
            <li><strong>Gloss Level:</strong> <?php echo htmlspecialchars($product['gloss_level']); ?></li>
            <li><strong>Lacquer Base:</strong> <?php echo htmlspecialchars($product['lacquer_base']); ?></li>
            <li><strong>Valve System:</strong> <?php echo htmlspecialchars($product['valve_system']); ?></li>
            <li><strong>Drying Time:</strong> <?php echo htmlspecialchars($product['drying_time']); ?></li>
        </ul>
        <p><strong>Price:</strong> <?php echo number_format($product['price'], 2); ?> SAR</p>
        <button onclick="addToCart(<?php echo $product['id']; ?>)">Add to Cart</button>
    </div>
</section>

<?php include_once '../includes/footer.php'; ?>