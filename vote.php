<?php
// filepath: c:\xampp\htdocs\healthy_network\vote.php

session_start();
include('dbconnection.php');

// $userId = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;
$userId = isset($_SESSION['user_id'])
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['product_id']) && isset($data['vote_type'])) {
    $product_id = intval($data['product_id']);
    $vote_type = intval($data['vote_type']);

    // Check if the user has already voted for this product
    $check_query = "SELECT * FROM vote WHERE user_id = ? AND product_id = ? AND vote_type = ?" ;
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("iis", $user_id, $product_id, $vote_type);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        echo json_encode(["success" => false, "message" => "You have already voted for this product."]);
    } else {
        // Insert the vote into the vote table
        $insert_query = "INSERT INTO vote (user_id, product_id, vote_type, vote_time) VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("iis", $user_id, $product_id, $vote_type);

        if ($stmt->execute()) {
            echo json_encode(["success" => true, "message" => "Vote recorded successfully."]);
        } else {
            echo json_encode(["success" => false, "message" => "Failed to record vote."]);
        }
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid input."]);
}
?>