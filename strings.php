
<?php
/*
// Check if the username is provided in the URL parameters
if(isset($_GET['username'])) {
    // Retrieve the username from the URL parameters
    $name = $_GET['username'];

    // Count the number of characters in the username
    $nameLength = strlen($name);

    // Output the concatenated string
    $fullGreeting = "Hello " . $name . "!";
    echo $fullGreeting . "<br>";

    // Output the length of the username
    echo "The length of your username is: " . $nameLength;
} else {
    echo "Username not provided in the URL parameters.";
}
?>
