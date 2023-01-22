<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
  <link rel="manifest" href="favicon_io/site.webmanifest">
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;400;700&display=swap" rel="stylesheet">
  <script src="script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
  </script>
  <title>Simply Complex Management</title>
</head>

<body>

  <h1>Welcome to the Simply Complext Art Shop Inventory Manager!</h1>
  <div class="log-in-box">
    <h2>Log In</h2>
    <form action="includes/login.php" method="POST">
      <label for="uid">Username:</label>
      <input type="text" name="uid" id="uid" placeholder="Enter your username...">
      <label for="pwd">Password:</label>
      <input type="password" name="pwd" id="pwd" placeholder="Please enter your password...">
      <button class="button">Log In</button>
    </form>
    <div class="log-in-box purple-border padding2">
      <h2>Demo Log In</h2>
      <p>(Uses a demo database.)</p>
      <div >
        <div class="flex">
          <h4>Username:</h4>
          <p>demo</p>
        </div>
        <div class="flex">
          <h4>Password:</h4>
          <p>password</p>
        </div>
      </div>
    </div>
  </div>


  <?php include 'footer.php'; ?>