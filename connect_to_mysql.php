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

// Query to fetch data from the users table
$sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Username: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>
