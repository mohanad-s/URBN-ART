<?php
$pageTitle = 'Home';
$logoClass = 'centered';
include_once 'header.php';
?>

<!-- Brand Description --> 
<div class="brand-description">
    <h2>About URBN ART</h2>
    <p>URBN ART is the first Saudi Brand dedicated for graffiti supplies. We aim to make high-quality spray paints, bags, and other accessories easily accessible to artists across the country.</p>

    <h3>Solutions We Provide</h3>
    <p>We understand that finding graffiti supplies in Saudi Arabia has been challenging, and quality options are limited. URBN ART solves this problem by offering premium products that are otherwise hard to find locally.</p>

    <h3>Benefits</h3>
    <p>By shopping at URBN ART, clients will gain access to exclusive, top-of-the-line graffiti products, delivered right to their doorstep. Our services save artists time, eliminating the need to search for supplies overseas. Moreover, we foster a creative community where artists can gain recognition and new opportunities by connecting with businesses that appreciate their talent.</p>
</div>

<div class="solutions-list">
    <h3>Our Services</h3>
    <ul>
        <li>Premium graffiti spray paints</li>
        <li>Quality graffiti bags</li>
        <li>Graffiti accessories</li>
        <li>Direct artist-business connections</li>
    </ul>
</div>

<div class="product-images">
    <img src="/images/URBN%20ART_Bag.png" alt="URBN ART Bag"/>
    <img src="/images/URBN%20ART_Bottle1.png" alt="URBN ART Spray 1"/>
    <img src="/images/URBN%20ART_Bottle2.png" alt="URBN ART Spray 2"/>
</div>

<div class="quote-section">
    <h2>What Artists Say</h2>
    <blockquote>
        "URBN ART makes graffiti accessible and supports artists by offering high-quality products at reasonable prices."
    </blockquote>
    <cite>- Ahmed Jan - Local Graffiti Artist</cite>
</div>

<div class="services-button">
    <button onclick="window.location.href='/pages/services.php'">Explore Our Services</button>
</div>

<?php
include_once '../includes/footer.php';
?>
