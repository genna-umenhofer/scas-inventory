<?php
  session_start();
  include_once 'dbc.php';

  //get the SKU from the form
  $sku = $_POST['sku-to-get'];

  //query the database for the item with matching SKU
  $sql = "SELECT * FROM inventory WHERE sku='$sku'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];

  } else {
    echo "No results found matching that SKU.";
  }

  mysqli_close($conn);

 