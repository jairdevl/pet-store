<?php
// Process the from data
if($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'config/database.php';

    // Get form data from POST request
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email exists
    $sql = "SELECT * FROM users WHERE email = '$email' and status = true";
    $result = pg_query($conn, $sql);

    if($result) {
        $user = pg_fetch_assoc($result);
        if($user) {
            // Verify password
            if(password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                header("Location: http://localhost/pet-store/src/home.php");
            } else {
                echo "<script>alert('Invalid password');</script>";
            }
        } else {
            echo "<script>alert('Email not found');</script>";
        }
    } else {
        echo "Error validating email";
    }
}
?>