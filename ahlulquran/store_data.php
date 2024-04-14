<?php
$servername = "localhost";
$username = "root";
$password = "rootpass"; // Replace with your MySQL root password
$dbname = "ahlulquran";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['Name'];
$students = $_POST['Students'];
$date_time = $_POST['date'];
$message = $_POST['Message'];

// Prepare and bind statement
$stmt = $conn->prepare("INSERT INTO registrations (name, students, date_time, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("siss", $name, $students, $date_time, $message);

// Execute the statement
if ($stmt->execute() === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
