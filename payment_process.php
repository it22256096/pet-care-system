<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payment";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted payment details
    $cardNumber = $_POST["cardNumber"];
    $expirationDate = $_POST["expirationDate"];
    $cvv = $_POST["cvv"];
    $cardholderName = $_POST["name"];

    // Process the payment (add your payment processing logic here)

    // Display a success message
    echo "Payment successful! Thank you, $cardholderName.";
}
?>
