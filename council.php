<?php
include('dbconnection.php');

if (isset($_POST['register_council'])) {

    $user_type = "council";
    $c_name = $_POST['c_name'];
    $c_person = $_POST['c_person'];
    $c_email = $_POST['c_email'];
    $c_password = $_POST['c_password'];
    $c_phone = $_POST['c_phone'];
    $c_region = $_POST['c_region'];
    $c_description = $_POST['c_description'];


    if (empty($c_name)) {
        echo "<script>alert('Please enter your name.'); window.history.back();</script>";
        exit();
    }

    $query = "INSERT INTO council (council_name, contact_person, email, password_1, phone, area, area_description,user_type) 
VALUES ('$c_name', '$c_person', '$c_email', '$c_password', '$c_phone', '$c_region', '$c_description', '$user_type')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        echo "<script>alert('Registered successfully.'); window.location.href='login1.html';</script>";
        exit();
    }
}
?>
