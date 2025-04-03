<?php  

include 'config/database.php';

// Get form data from POST request
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare SQL insert statement for users table
$sql = "INSERT INTO users (firstname, lastname, email, password) 
VALUES ('$firstname', '$lastname', '$email', '$password')";

// Execute SQL statement
$answer = pg_query($conn, $sql);

// Check if user was created successfully
if ($answer) {
    echo "User created successfully";
} else {
    echo "Error: " . pg_last_error($conn);
}

?>
