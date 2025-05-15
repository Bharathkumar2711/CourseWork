<?php
include('dbconnection.php');

if (isset($_POST['register_resident'])) {

    $user_type = $_POST['user_type'];
    $r_f_name = $_POST['r_f_name'];
    $r_l_name = $_POST['r_l_name'];
    $r_email = $_POST['r_email'];
    $r_password = $_POST['r_password'];
    $r_age = $_POST['r_age'];
    $r_gender = $_POST['r_gender'];
    $r_area = $_POST['r_area'];

    // Set to empty if not submitted, or use actual value
    $interests_1 = isset($_POST['interests_1']) ? $_POST['interests_1'] : '';
    $interests_2 = isset($_POST['interests_2']) ? $_POST['interests_2'] : '';
    $interests_3 = isset($_POST['interests_3']) ? $_POST['interests_3'] : '';
    $interests_4 = isset($_POST['interests_4']) ? $_POST['interests_4'] : '';
    $interests_5 = isset($_POST['interests_5']) ? $_POST['interests_5'] : '';

    if (empty($r_f_name)) {
        echo "<script>alert('Please enter your first name.'); window.history.back();</script>";
        exit();
    }

    $query = "INSERT INTO resident_1 (
        user_type, first_name, last_name, email, password_1, age, gender, area,
        interest_1, interest_2, interest_3, interest_4, interest_5
    ) VALUES (
        '$user_type', '$r_f_name', '$r_l_name', '$r_email', '$r_password', '$r_age',
        '$r_gender', '$r_area',
        '$interests_1', '$interests_2', '$interests_3', '$interests_4', '$interests_5'
    )";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        echo "<script>alert('Registered successfully.'); window.location.href='login1.html';</script>";
        exit();
    }
}
?>
