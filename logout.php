<?php
// filepath: c:\xampp\htdocs\updated_code_1\logout.php

session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the login page
header("Location: home_guest.php");
exit();
?>