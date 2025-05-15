// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");

    // Add event listener for form submission
    loginForm.addEventListener("submit", function (event) {
        const userName = document.querySelector("input[name='user_name']").value.trim();
        const userPassword = document.querySelector("input[name='user_password']").value.trim();

        // Basic validation
        if (userName === "" || userPassword === "") {
            alert("Please fill in all fields.");
            event.preventDefault(); // Prevent form submission
            return;
        }

        // Optional: Add more client-side validation here
        if (!validateEmail(userName)) {
            alert("Please enter a valid email address.");
            event.preventDefault(); // Prevent form submission
            return;
        }
    });

    // Function to validate email format
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
});