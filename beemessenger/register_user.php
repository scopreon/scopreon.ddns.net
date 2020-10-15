<?php
session_start();
include 'test.php';
$username = $_POST['user'];
$password = $_POST['pass'];
$sql = "SELECT * FROM messenger.user_data WHERE `username` = '$username'";

$result = $conn->query($sql);

if ($result->num_rows > 0 || $username=='') {
    echo 'username already exists/error in creation';
} else {
  $sql = "INSERT INTO messenger.user_data (username,password) VALUES ('$username','$password');";
  $result = $conn->query($sql);
  echo 'account created';
}
