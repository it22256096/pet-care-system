<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform login validation (add your own logic here)
    if ($email == "example@example.com" && $password == "password123") {
        // Login successful, redirect to email verification page
        header("Location: emaiverify.html");
        exit;
    } else {
        // Login failed, display an error message
        echo "Invalid email or password. Please try again.";
    }
}
?>
