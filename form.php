<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission</title>
</head>
<body>
  <h2>Submit Form Data Here</h2>
  <form action="/form.php" method="get">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="message">Message:</label><br>
  <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
  <input type="submit" value="Submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve form data
    $username = isset($_GET['username']) ? $_GET['username'] : '';
    $message = isset($_GET['message']) ? $_GET['message'] : '';

    // Output the data
    echo "Username: " . $username . "<br>";
    echo "Message: " . $message;
}
?>

</body>
</html>
