
    <div class="footer">
        <p>
        &copy; <?php echo date('Y'); ?> URBN ART. All rights reserved.</p>
        <address>
            Contact us at: <a href="mailto:info@urbnart.com">info@urbnart.com</a>
        </address>
        
        <p>
            <!-- W3C Markup Validation Image -->
            <a href="https://validator.w3.org/check?uri=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>">
                <img
                    src="https://www.w3.org/Icons/valid-xhtml10"
                    alt="Valid XHTML 1.0 Strict"
                    style="width: 88px; height: 31px;" />
            </a>
            <!-- W3C CSS Validation Image -->
            <a href="https://jigsaw.w3.org/css-validator/validator?uri=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>">
            <img
                src="https://jigsaw.w3.org/css-validator/images/vcss-blue"
                alt="Valid CSS"
                style="width: 88px; height: 31px;" />
            </a>

        </p>
        
    </div>
