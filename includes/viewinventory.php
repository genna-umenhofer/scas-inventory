<?php
  session_start();
  include_once 'dbc.php';

  //get the SKU from AJAX request
  $sku = $_POST['sku'];
  
  //query the database for the item with matching SKU
  $sql = "SELECT * FROM inventory WHERE sku='$sku'";
  $result = mysqli_query($conn, $sql);

  //fetch the first row of data from the query
  $item = $result->fetch_assoc();

  //return data as JSON
  echo json_encode($item);