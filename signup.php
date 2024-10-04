<?php
// Configuration for the MySQL database
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

// Process the form submission if it was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form data
    $accountType = $_POST["account"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];

    // Perform any necessary validation and sanitization of the form data

    // Prepare the SQL statement
    $sql = "INSERT INTO signup (account, email, name, password, gender) VALUES ('$accountType', '$email','$name', '$password' , '$gender' ) ";

    // Create a prepared statement
    $stmt = $conn->prepare($sql);

    // Bind the form data to the prepared statement
    $stmt->bind_param("sssss", $accountType, $email, $name, $password, $gender);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Form data successfully inserted into the database
        echo "Registration successful!";
    } else {
        // An error occurred while inserting the form data
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
