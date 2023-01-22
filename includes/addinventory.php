<?php
  session_start();
  include_once 'dbc.php';

  $sku = $_POST['SKU'];
  $name = $_POST['product-name'];
  $description = $_POST['product-description'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $weight = $_POST['weight'];
  $category = $_POST['category'];
  $artist = $_POST['artist'];
  $date = $_POST['date-added'];
  //$media = file_get_contents($_FILES['media']);

  $sql = "INSERT INTO inventory (sku, name, description, category, price, quantity, weight, crafter, date_created) VALUES ('$sku', '$name', '$description', '$category', '$price', '$quantity', '$weight', '$artist', '$date')";

  mysqli_query($conn, $sql);
/*
  if ($conn->query($sql) === TRUE) {
    echo "Record uploaded successfully";
  } else {
    echo "Error uploading record: " . $conn->error;
  }
*/
  mysqli_close($conn);

 /* 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($media['tmp_name'] as $index => $image) {
      $image_data = file_get_contents($image);
      print '$image_data';
      $insertstmt = "INSERT INTO listing_media (sku, data) VALUES ('$sku', '$image_data');";
      mysqli_query($conn, $insertstmt);
      mysqli_close($conn);
    }
  }
  */

  // Display the alert box 
  //echo '<script>alert("Inventory Item Added!")</script>';

  //return to inventory management page
  header("Location: ../manage-inventory.php");

  

?>