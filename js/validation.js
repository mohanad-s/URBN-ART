function validateForm() {
    // Get form elements
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const city = document.getElementById('city').value.trim();
    const isArtist = document.querySelector('input[name="is_artist"]:checked');
    const artType = document.querySelector('input[name="art_type"]:checked');
    const purchaseFrequency = document.getElementById('purchase_frequency').value;
    const feedback = document.getElementById('feedback').value.trim();

    // Error messages
    let errors = [];

    // Name validation
    if (name.length < 2) {
        errors.push("Name must be at least 2 characters long");
    }

    // Email validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        errors.push("Please enter a valid email address");
    }

    // Phone validation
    const phonePattern = /^\d{10}$/;
    if (!phonePattern.test(phone.replace(/[^0-9]/g, ''))) {
        errors.push("Please enter a valid 10-digit phone number");
    }

    // City validation
    if (city.length < 2) {
        errors.push("Please enter a valid city name");
    }

    // Radio button validation
    if (!isArtist) {
        errors.push("Please select whether you are an artist");
    }
    if (!artType) {
        errors.push("Please select your type of art");
    }

    // Purchase frequency validation
    if (!purchaseFrequency) {
        errors.push("Please select your purchase frequency");
    }

    // Feedback validation
    if (feedback.length < 10) {
        errors.push("Please provide feedback of at least 10 characters");
    }

    // If there are any errors, display them and prevent form submission
    if (errors.length > 0) {
        alert(errors.join("\n"));
        return false;
    }

    return true;
}

// Real-time validation feedback
document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="tel"], textarea');
    
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
    });
});

function validateField(field) {
    const value = field.value.trim();
    let isValid = true;
    let errorMessage = '';

    switch(field.id) {
        case 'name':
            isValid = value.length >= 2;
            errorMessage = 'Name must be at least 2 characters long';
            break;
        case 'email':
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            isValid = emailPattern.test(value);
            errorMessage = 'Please enter a valid email address';
            break;
        case 'phone':
            const phonePattern = /^\d{10}$/;
            isValid = phonePattern.test(value.replace(/[^0-9]/g, ''));
            errorMessage = 'Please enter a valid 10-digit phone number';
            break;
        case 'feedback':
            isValid = value.length >= 10;
            errorMessage = 'Please provide feedback of at least 10 characters';
            break;
    }

    // Add or remove error styling
    if (!isValid && value !== '') {
        field.classList.add('error');
        // Show error message if it doesn't exist
        let errorDiv = field.nextElementSibling;
        if (!errorDiv || !errorDiv.classList.contains('error-message')) {
            errorDiv = document.createElement('div');
            errorDiv.classList.add('error-message');
            field.parentNode.insertBefore(errorDiv, field.nextSibling);
        }
        errorDiv.textContent = errorMessage;
    } else {
        field.classList.remove('error');
        // Remove error message if it exists
        const errorDiv = field.nextElementSibling;
        if (errorDiv && errorDiv.classList.contains('error-message')) {
            errorDiv.remove();
        }
    }
}