<?php
session_start();

include_once 'dbc.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = $_POST["uid"];
$password = $_POST["pwd"];

if ($username != '' && $password != '') {
  $sql = "SELECT * FROM logins WHERE username=$username AND password=$password";
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    var_dump($conn);
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    header("Location: ../data.php");
    exit();
  } else {
    header('Location: ../index.php');
  }
} else {
  header('Location: ../index.php');
};

mysqli_close($conn);