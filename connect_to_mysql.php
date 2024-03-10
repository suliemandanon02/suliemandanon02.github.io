<?php
// MySQL database credentials
$servername = "localhost"; // Change this if your database is hosted on a different server
$username = "sulieman"; // Your MySQL username
$password = "assignment1pass"; // Your MySQL password
$database = "assignment1"; // Your MySQL database name

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform SQL queries or other operations here...

// Close the connection
$conn->close();
?>
