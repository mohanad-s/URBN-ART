<?php
$pageTitle = 'Products';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once __DIR__ . '/../includes/db_connection.php';

// Get all products from database
$conn = getDBConnection();
$stmt = $conn->prepare("SELECT * FROM products ORDER BY id");
$stmt->execute();
$products_result = $stmt->get_result();

// Add these debug lines
if (!$products_result) {
    die("Query failed: " . $conn->error);
}
echo "Number of products: " . $$products_result->num_rows; // This will tell us if we're getting products

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
<div class="back-link">
    <a href="../includes/index.php">Back to Home</a>
</div>


    <h2>Products</h2>
    <section class="products-grid">
        
        <?php
         echo "Before loop"; // Debug line
         while ($product = $products_result->fetch_assoc()):
        echo "Processing product: " . $product['name']; // Debug line
        ?>
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

</div>
<?php 
$conn->close();
include_once '../includes/footer.php'; 
?>
</body>
</html>