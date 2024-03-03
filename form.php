<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission</title>
</head>
<body>
  <h2>Submit Form Data Here</h2>
  <form action="/form.php" method="get" name="myForm">
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <input type="submit" value="Send form data!">
  </form>

<?php
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve form data
    $fname = isset($_GET['fname']) ? $_GET['fname'] : '';
    $lname = isset($_GET['lname']) ? $_GET['lname'] : '';

    // Do something with the data
    echo "First Name: " . $fname . "<br>";
    echo "Last Name: " . $lname;
}
?>
</body>
</html>
