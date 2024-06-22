<?php
// Hardcoded credentials for demonstration purposes
$stored_username = 'admin';
$stored_password = 'password123';

// Get the username and password from the POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the entered username and password match the stored credentials
if ($username === $stored_username && $password === $stored_password) {
    echo 'Login successful!';
} else {
    echo 'Invalid username or password.';
}
?>
