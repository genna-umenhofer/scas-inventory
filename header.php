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
  <script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
  <title>Simply Complex Management</title>
</head>

<body>
  <nav>
    <div>
      <a href="data.php">Data</a>
      <a href="inventory.php">Inventory</a>
    </div>
    <div>
      <a href="manage-inventory.php">Manage</a>
      <a href="orders.php">Orders</a>
    </div>
    <div class="log-out-form">
  <form action="includes/logout.php" method="_POST">
  <?php echo "<p style='color:white;'>Welcome, {$_SESSION['username']}!</p>"; ?>
      <button type="submit" class="button no-margin">Log Out</button>
    </form>
  </div>
  </nav>
  
  

  <?php
  include 'includes/dbc.php';
  
?>
  
  </div>