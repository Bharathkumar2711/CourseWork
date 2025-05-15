<?php
// Database connection
include('dbconnection.php');



// Fetch total registered residents
$residents_query = "SELECT COUNT(*) AS total_residents FROM `resident_1`";
$residents_result = $conn->query($residents_query);
$total_residents = $residents_result->fetch_assoc()['total_residents'];

// Fetch total local businesses
$businesses_query = "SELECT COUNT(*) AS total_businesses FROM `business`";
$businesses_result = $conn->query($businesses_query);
$total_businesses = $businesses_result->fetch_assoc()['total_businesses'];

// Fetch total products/services
$offerings_query = "SELECT (SELECT COUNT(*) FROM services) + (SELECT COUNT(*) FROM products) AS total_offerings";
$offerings_result = $conn->query($offerings_query);
$total_offerings = $offerings_result->fetch_assoc()['total_offerings'];

// Fetch total votes cast
$votes_query = "SELECT COUNT(*) AS total_votes FROM vote";
$votes_result = $conn->query($votes_query);
$total_votes = $votes_result->fetch_assoc()['total_votes'];
?>

<section class="section" id="admin-dashboard">
    <div class="container">
        <h2 class="dashboard-title">Council Dashboard: <span id="region-name">Your Region</span></h2>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-title">Total Registered Residents</div>
                <div class="stat-value" id="total-residents"><?php echo $total_residents; ?></div>
            </div>

            <div class="stat-card">
                <div class="stat-title">Local Businesses</div>
                <div class="stat-value" id="total-businesses"><?php echo $total_businesses; ?></div>
            </div>

            <div class="stat-card">
                <div class="stat-title">Total Products/Services</div>
                <div class="stat-value" id="total-offerings"><?php echo $total_offerings; ?></div>
            </div>

            <div class="stat-card">
                <div class="stat-title">Total Votes Cast</div>
                <div class="stat-value" id="total-votes"><?php echo $total_votes; ?></div>
            </div>
        </div>
    </div>
</section>