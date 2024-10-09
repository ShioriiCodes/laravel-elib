document.getElementById('showPassword').addEventListener('change', function() {
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('confirm_password');
    
    if (this.checked) {
        // Show password and confirm password
        passwordField.type = 'text';
        confirmPasswordField.type = 'text';
    } else {
        // Hide password and confirm password
        passwordField.type = 'password';
        confirmPasswordField.type = 'password';
    }
});
