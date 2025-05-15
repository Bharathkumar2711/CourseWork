<?php
// filepath: c:\xampp\htdocs\healthy_network\fetch_services.php

include('dbconnection.php'); 

$query = "SELECT * FROM services ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="service-card">';
        echo '    <div class="service-image">';
        echo '        <img src="display_service_image.php?service_id=' . $row['service_id'] . '" alt="' . htmlspecialchars($row['service_name']) . '">';
        echo '    </div>';
        echo '    <div class="service-header">';
        echo '        <h3 class="service-title">' . htmlspecialchars($row['service_name']) . '</h3>';
        echo '    </div>';
        echo '    <div class="service-content">';
        echo '        <p class="service-description">' . htmlspecialchars($row['service_description']) . '</p>';
        echo '        <p class="service-price">£' . number_format($row['price'], 2) . '</p>';
        echo '    </div>';
        echo '    <div class="service-footer">';
        echo '        <button class="btn btn-primary">';
        echo '            <i class="fas fa-shopping-cart mr-2"></i> Add to Cart';
        echo '        </button>';
        echo '        <button class="btn btn-secondary vote-button" data-service_name="' . $row['service_name'] . '">';
        echo '            <i class="fas fa-heart mr-2"></i> Vote';
        echo '        </button>';
        echo '    </div>';
        echo '</div>';
    }
} else {
    echo '<p>No services available at the moment.</p>';
}
?>