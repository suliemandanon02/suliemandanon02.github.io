<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission</title>
  <style>
    .goback-button {
      position: fixed;
      bottom: 10px; /* Adjust as needed */
      left: 10px; /* Adjust as needed */
    }
  </style>
</head>
<body>
  <h2>Submit Form Data Here</h2>
  <form action="/form.php" method="get" id="myForm">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
    <input type="submit" value="Submit">
    <button type="button" onclick="clearForm()">Clear</button>
  </form>

  <!-- Output Section -->
  <div id="output">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Retrieve form data
        $username = isset($_GET['username']) ? $_GET['username'] : '';
        $message = isset($_GET['message']) ? $_GET['message'] : '';

        // Output the data
        echo "Username: <span id='usernameOutput'>" . $username . "</span><br>";
        echo "Message: <span id='messageOutput'>" . $message . "</span><br>";
    }
    ?>
  </div>
  <?php

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

  <!-- Go Back Button -->
  <button class="goback-button" onclick="goBack()">Go Back</button>

  <!-- Line break -->
  <br>

  <script>
    function clearForm() {
      // Reset form fields
      document.getElementById("myForm").reset();
      // Clear output
      document.getElementById("usernameOutput").textContent = '';
      document.getElementById("messageOutput").textContent = '';
    }

    function goBack() {
      // Get the current URL
      var currentUrl = window.location.href;

      // Redirect to the main page with the form data included as query parameters
      window.location.href = 'index.html' + currentUrl.substring(currentUrl.indexOf('?'));
    }
  </script>
</body>
</html>
