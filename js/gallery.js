// Store all gallery images and their titles
const galleryImages = [
    { src: '../images/gallery5.jpg', title: 'URBN BLACK - AESTHETICS' },
    { src: '../images/gallery4.jpg', title: 'URBN ART COMMUNITY - ART WORK BY JOHN DOE' },
    { src: '../images/gallery3.jpg', title: 'URBN ART COMMUNITY - ART WORK BY JANE DOE' },
    { src: '../images/gallery2.webp', title: 'URBN Gold - TESTING' },
    { src: '../images/gallery1.jpg', title: 'URBN SMILEY - SPECIAL EDITION CAN!' },
    { src: '/images/URBN ART_Gloves.png', title: 'URBN Nylon Gloves' },
    { src: '/images/URBN ART_Ink.png', title: 'URBN Bold Ink' },
    { src: '/images/URBN ART_Bag.png', title: 'URBN Cotton Bag' }
];

let currentImageIndex = 0;

// Function to change the main image
function changeImage(src, title) {
    const mainImage = document.getElementById('mainImage');
    const imageTitle = document.getElementById('imageTitle');
    
    // Add fade out effect
    mainImage.style.opacity = 0;
    
    // Change image after fade out
    setTimeout(() => {
        mainImage.src = src;
        imageTitle.textContent = title;
        mainImage.style.opacity = 1;
        
        // Update current index
        currentImageIndex = galleryImages.findIndex(img => img.src === src);
        
        // Highlight current thumbnail
        updateThumbnailHighlight();
    }, 300);
}

// Function to navigate to previous image
function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
    changeImage(galleryImages[currentImageIndex].src, galleryImages[currentImageIndex].title);
}

// Function to navigate to next image
function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
    changeImage(galleryImages[currentImageIndex].src, galleryImages[currentImageIndex].title);
}

// Function to update thumbnail highlight
function updateThumbnailHighlight() {
    const thumbnails = document.querySelectorAll('.thumbnail');
    thumbnails.forEach((thumb, index) => {
        if (index === currentImageIndex) {
            thumb.classList.add('active');
        } else {
            thumb.classList.remove('active');
        }
    });
}

// Initialize the gallery
document.addEventListener('DOMContentLoaded', function() {
    updateThumbnailHighlight();
    
    // Add keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            prevImage();
        } else if (e.key === 'ArrowRight') {
            nextImage();
        }
    });
});