<?php
// filepath: c:\xampp\htdocs\healthy_network\fetch_products.php

include('dbconnection.php');


$query = "SELECT * FROM products ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="service-card">';
        echo '    <div class="product-image">';
        echo '<img src="display_image.php?Product_id=' . $row['Product_id'] . '" alt="' . htmlspecialchars($row['product_name']) . '">';
        echo '    </div>';
        echo '    <div class="product-header">';
        echo '        <h3 class="product-title">' . htmlspecialchars($row['product_name']) . '</h3>';
        echo '    </div>';
        echo '    <div class="product-content">';
        echo '        <p class="product-description">' . htmlspecialchars($row['description']) . '</p>';
        echo '        <p class="product-price">£' . number_format($row['price'], 2) . '</p>';
        echo '    </div>';
        echo '    <div class="product-footer">';
        echo '        <button class="btn btn-primary">';
        echo '            <i class="fas fa-shopping-cart mr-2"></i> Add to Cart';
        echo '        </button>';
        echo '        <button class="btn btn-secondary vote-button" data-product_name="' . $row['product_name'] . '">';
        echo '            <i class="fas fa-heart mr-2"></i> Vote';
        echo '        </button>';
        echo '    </div>';
        echo '</div>';
    }
} else {
    echo '<p>No products available at the moment.</p>';
}
?>