<?php
include('dbconnection.php');

if (isset($_POST['register_business'])) {

    $user_type = "business";
    $b_name = $_POST['b_name'];
    $b_contact_person = $_POST['b_contact_person'];
    $b_email = $_POST['b_email'];
    $b_password = $_POST['b_password'];
    $b_phone = $_POST['b_phone'];
    $b_website = $_POST['b_website'];
    $b_address = $_POST['b_address'];
    $b_category = $_POST['b_category'];
    $b_description = $_POST['b_description'];

    if (empty($b_name)) {
        echo "<script>alert('Please enter your business name.'); window.history.back();</script>";
        exit();
    }

    $query = "INSERT INTO business (business_name, contact_person, email, password_1, phone, website, address, category, description, user_type) 
VALUES ('$b_name', '$b_contact_person', '$b_email', '$b_password', '$b_phone', '$b_website', '$b_address', '$b_category', '$b_description', '$user_type')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        echo "<script>alert('Business registered successfully.'); window.location.href='login1.html';</script>";
        exit();
    }
}
?>