<?php

include 'config/database.php';

// Get form data from POST request
$firstname = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Check if email already exists
$sql = "SELECT count(id) FROM users WHERE email = '$email' and status = true";
$result = pg_query($conn, $sql);

if($result) {
    $count = pg_fetch_assoc($result);
    if($count['count'] > 0) {
        echo "Email already exists";
    } else {
        // Insert new user
        $sql = "INSERT INTO users (firstname, lastname, email, password) 
        VALUES ('$firstname', '$lastname', '$email', '$password')";

        if(pg_query($conn, $sql)) {
            echo "User created successfully";
        } else {
            echo "Error creating user: " . pg_last_error($conn);
        }
    }
} else {
    echo "Error validating email";
}

?>