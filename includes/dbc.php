<?php
session_start();
include('.env.php');


if ($_SESSION['username'] === 'demo') {
  $servername = $demodbServer;
  $username = $demodbUser;
  $password = $demodbPass;
  $databasename = $demodbName;
  
  // Create Connection
  $conn = mysqli_connect($servername, $username, $password, $databasename);
  
  // Check Connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

} else {
  $servername = $dbServer;
  $username = $dbUser;
  $password = $dbpass;
  $databasename = $dbName;
  
  // Create Connection
  $conn = mysqli_connect($servername, $username, $password, $databasename);
  
  // Check Connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
}


?>