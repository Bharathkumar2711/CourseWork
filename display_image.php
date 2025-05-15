<?php
include('dbconnection.php');
$Product_id = $_GET['Product_id'];
$query = "SELECT image_path FROM products WHERE Product_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $Product_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

header("Content-Type: image/jpeg"); 
echo $row['image_path'];
?>