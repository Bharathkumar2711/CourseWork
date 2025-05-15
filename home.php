<?php
// filepath: c:\xampp\htdocs\updated_code_1\home.php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login1.html"); // Redirect to login page if not logged in
    exit();
}

// Optional: Customize the page based on user type
$user_type = $_SESSION['user_type'];

// Example: Perform actions based on user type
if ($user_type === 'resident') {
    
} elseif ($user_type === 'business') {
    // Business-specific logic
} elseif ($user_type === 'council') {
    // Council-specific logic
} else {
    // Default logic for other user types
}

?>