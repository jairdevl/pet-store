<?php  

include 'config/database.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (firstname, lastname, email, password) 
VALUES ('$firstname', '$lastname', '$email', '$password')";

$answer = pg_query($conn, $sql);

if ($answer) {
    echo "User created successfully";
} else {
    echo "Error: " . pg_last_error($conn);
}

?>
