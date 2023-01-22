<?php
session_start();

if ($_SESSION['username'] === 'demo') {
  $servername = "localhost";
  $username = "demo";
  $password = "(FC37w1imHkyOK_z";
  $databasename = "simply_complex_demo";
  
  // Create Connection
  $conn = mysqli_connect($servername, $username, $password, $databasename);
  
  // Check Connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

} else {
  $servername = "localhost";
  $username = "simply_complex";
  $password = "!sVqO][mg8ApXkM/";
  $databasename = "simply_complex";
  
  // Create Connection
  $conn = mysqli_connect($servername, $username, $password, $databasename);
  
  // Check Connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
}


?>