<?php
// filepath: c:\xampp\htdocs\updated_code_1\login.php
session_start();
include('dbconnection.php');

if (isset($_POST['login_submit'])) {

    $user_email = $_POST['user_name']; // assuming this is actually the email
    $user_password = $_POST['user_password'];

    // Check if fields are filled
    if (empty($user_email) || empty($user_password)) {
        echo "<script>alert('Please fill in both email and password.'); window.location.href='fullindex.php';</script>";
        exit();
    }

    // Check credentials for different user types
    $query = "(SELECT email, 'resident' AS user_type FROM resident_1 WHERE ( email = '$user_email' OR first_name = '$user_email') AND password_1 = '$user_password')
UNION 
    (SELECT email, 'council' AS user_type FROM council WHERE (email = '$user_email' OR council_name = '$user_email') AND password_1 = '$user_password')
UNION
    (SELECT email, 'business' AS user_type FROM business WHERE (email = '$user_email' OR business_name = '$user_email') AND password_1 = '$user_password')";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // User found
        
        $user = mysqli_fetch_assoc($result);

        $_SESSION['user_email'] = $user_email;
        $_SESSION['user_type'] = $user['user_type'];
        $_SESSION['user_id'] = $user['user_id']; 

        // Redirect based on user type
        if ($user['user_type'] == 'resident') {
            header('Location: home_Resident.php'); 
        } elseif ($user['user_type'] == 'council') {
            header('Location: home_council.php'); 
        } elseif ($user['user_type'] == 'business') {
            header('Location: home_Business.php'); 
        } else {
            header('Location: home_guest.php'); 
        }
        exit();
    } else {
        echo "<script>
        alert('Invalid email or password. Please try again or register.');
        window.history.back(); // stays on the same page
</script>";
        exit();
    }
}
?>