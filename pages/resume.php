<?php
$pageTitle = 'Owner Resume';
include_once '../includes/header.php';
?>

<div class="resume-container">
    <div class="resume-header">
        <h2>About The Owner</h2>
        <p>Meet Mohanad Sulaiman Al Dakheel, the founder and creative force behind URBN ART</p>
    </div>

    <div class="owner-info">
        <div class="owner-description">
            <h3>Vision & Leadership</h3>
            <p>As the founder of URBN ART, Mohanad has revolutionized the graffiti art supply industry in Saudi Arabia. 
            With a passion for urban art and a keen understanding of artists' needs, he established the first dedicated 
            graffiti supplies brand in the country.</p>
        </div>
    </div>

    <div class="resume-viewer">
        <h3>Professional Resume</h3>
        <div class="pdf-container" style="width: 100%; height: 800px;">
            <object
                data="../documents/Mohanad_AlDakheel__Resume.pdf"
                type="application/pdf"
                width="100"
                height="800">
                <p>It appears you don't have a PDF plugin for this browser. 
                No worries! You can <a href="../documents/Mohanad_AlDakheel__Resume.pdf">click here to download the PDF file</a>.</p>
            </object>
        </div>
    </div>
</div>

<?php include_once '../includes/footer.php'; ?>
