<?php
session_start();
include 'test.php';
$username = $_SESSION['message_viewing'];
$message = str_replace('\'','',$_POST['message']);
$currentuser = $_SESSION['username'];
$time = date("Y-m-d h:i:s");
$sql = "SELECT * FROM messenger.user_data WHERE `username` = '$username'";

$result = $conn->query($sql);

if ($result->num_rows > 0 && $currentuser != $username) {
    // output data of each row
    $sql = "INSERT INTO messenger.messages (`sender`, `reciever`, `datetime`, `message`) VALUES ('$currentuser', '$username', '$time', '$message')";
    $result = $conn->query($sql);
}
 ?>
