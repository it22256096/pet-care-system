<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullName = $_POST["full-name"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phone"];
    $message = $_POST["message"];

    // Insert the data into the database
    $sql = "INSERT INTO contact_messages (full_name, email, phone_number, message)
            VALUES ('$fullName', '$email', '$phoneNumber', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
