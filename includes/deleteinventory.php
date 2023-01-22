<?php
  include_once 'dbc.php';

  $sku = $_POST['sku-to-delete'];

  //echo $sku;

  $sql = "DELETE FROM inventory WHERE sku='$sku'";

  mysqli_query($conn, $sql);

  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

  mysqli_close($conn);

  header("Location: ../manage-inventory.php");
