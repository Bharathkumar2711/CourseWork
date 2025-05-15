<?php
// filepath: c:\xampp\htdocs\updated_code_1\session_handler.php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login1.html"); // Redirect to login page if not logged in
    exit();
}

// Optional: Check user type if needed
function checkUserType($requiredType) {
    if ($_SESSION['user_type'] !== $requiredType) {
        echo "Access denied. This page is for $requiredType users only.";
        exit();
    }
}
?>