<?php
// filepath: c:\xampp\htdocs\healthy_network\products.php

// Include database connection
include('dbconnection.php');
if (isset($_POST['register_product'])) {
    // productForm.addEventListener('submit', (e) => {
        // e.preventDefault();
        $offering_type = $_POST['offering_type'];
    $offering_category = $_POST['offering_category'];
    $product_name = $_POST['p_name'];
    $product_description = $_POST['p_description'];
    $product_price = $_POST['p_price'];
    $price_category = $_POST['p_category'];
    $health_benefits = $_POST['p_benefits'];

    // Handle certifications
    $certifications = [];
    if (isset($_POST['p_certification_1'])) $certifications[] = 'USDA Organic';
    if (isset($_POST['p_certification_2'])) $certifications[] = 'Non-GMO';
    if (isset($_POST['p_certification_3'])) $certifications[] = 'Fair Trade';
    if (isset($_POST['p_certification_4'])) $certifications[] = 'Vegan';
    if (isset($_POST['p_certification_5'])) $certifications[] = 'Cruelty-Free';
    $certifications_str = implode(', ', $certifications);

    // Handle image upload
    $image_path = null;
    if (!empty($_FILES['p_image']['name'])) {
        $target_dir = "uploads/";
        $image_path = $target_dir . basename($_FILES['p_image']['name']);
        // if (!move_uploaded_file($_FILES['p_image']['tmp_name'], $image_path)) {
        //     die("Error uploading image.");
        // }
    }
    $image_path = $image_path != null ? $image_path : 'default.jpg'; // Set a default image if none is uploaded
    // Insert data into the database
    $query = "INSERT INTO products (product_type, category, product_name, description, price, price_category, health_benefits, certifications, image_path) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param(
        "ssssdsiss",
        $offering_type,
        $offering_category,
        $product_name,
        $product_description,
        $product_price,
        $price_category,
        $health_benefits,
        $certifications_str,
        $image_path
    );
        
    if ($stmt->execute()) {
        echo "Product registered successfully!";
        header("Location: home_business.php"); 
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}else {
    echo "Invalid request.";
}
?>