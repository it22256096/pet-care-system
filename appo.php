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
    $fullName = $_POST["name"];
    $pet = $_POST["pet"];
    $phoneNumber = $_POST["phone"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $area = $_POST["area"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postCode = $_POST["post-code"];

    // Insert the data into the database
    $sql = "INSERT INTO appointments (full_name, pet, phone_number, email, appointment_date, appointment_time, area, city, state, post_code)
            VALUES ('$fullName', '$pet', '$phoneNumber', '$email', '$date', '$time', '$area', '$city', '$state', '$postCode')";

    if (mysqli_query($conn, $sql)) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
