<?php
$pageTitle = 'Gallery';
include_once '../includes/header.php';
?>

<!-- Gallery Page Content -->
<div class="gallery-container">
    <h2>Product Gallery</h2>
    
    <div class="gallery-grid">
        <?php
        // Get all products from database
        require_once '../includes/db_connection.php';
        $conn = getDBConnection();
        
        $query = "SELECT id, name, image_path FROM products";
        $result = $conn->query($query);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="gallery-item">';
                echo '<img src="' . htmlspecialchars($row['image_path']) . '" 
                          alt="' . htmlspecialchars($row['name']) . '"
                          class="thumbnail"
                          onclick="showImage(this.src, \'' . htmlspecialchars($row['name']) . '\')">';
                echo '<p>' . htmlspecialchars($row['name']) . '</p>';
                echo '</div>';
            }
        }
        ?>
    </div>
</div>

<!-- Modal for enlarged image -->
<div id="imageModal" class="modal">
    <span class="close">&times;</span>
    <img id="modalImage" src="" alt="">
    <div id="modalCaption"></div>
</div>

<!-- Add JavaScript for gallery functionality -->
<script>
const modal = document.getElementById('imageModal');
const modalImg = document.getElementById('modalImage');
const captionText = document.getElementById('modalCaption');
const closeBtn = document.getElementsByClassName('close')[0];

function showImage(src, caption) {
    modal.style.display = "block";
    modalImg.src = src;
    captionText.innerHTML = caption;
}

closeBtn.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<?php
include_once '../includes/footer.php';
?>