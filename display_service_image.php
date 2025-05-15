<?php
include('dbconnection.php');
$id = $_GET['service_id'];
$query = "SELECT service_image_path FROM services WHERE service_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

header("Content-Type: image/jpeg"); 
echo $row['service_image_path'];
?>