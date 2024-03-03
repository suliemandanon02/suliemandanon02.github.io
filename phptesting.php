<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function & String</title>
</head>
<body>
  <h1>Welcome to PHP TESTING</h1>
  <div id="phpOutput">
    <?php include 'strings.php';?>
  </div>
  <script>
    function goBack() {
      // Get the current URL
      var currentUrl = window.location.href;

      // Redirect to the main page with the form data included as query parameters
      window.location.href = 'index.html' + currentUrl.substring(currentUrl.indexOf('?'));
    }
  </script>
</body>
</html>


