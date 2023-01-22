<?php
session_start();

include_once 'dbc.php';

$username = $_POST["uid"];
$password = $_POST["pwd"];

if ($username != '' && $password != '') {
  $sql = "SELECT * FROM logins WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);

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