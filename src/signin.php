<?php

include 'config/database.php';

// Get form data from POST request
$email = $_POST['email'];
$password = $_POST['password'];

// Hash password
//$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$hashed_password = $password;

$sql = "SELECT u.id FROM users u WHERE email = '$email' AND password = '$hashed_password' GROUP BY u.id";
$result = pg_query($conn, $sql);
if($result) {
    $row = pg_fetch_assoc($result);
    if($row['id'] > 0) {
    header('Refresh: 0; url=http://localhost/pet-store/src/home.php');
    } else {
        echo "Invalid email or password";
    }
} else {
    echo "Error validating email";
}

?>