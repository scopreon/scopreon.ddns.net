<?php
session_start();
include 'test.php';
$message_user = $_POST['username'];
$currentuser = $_SESSION['username'];
$time = date("Y-m-d h:i:s");
$message = 'Ya like jazz?';
$sql = "SELECT * FROM messenger.user_data WHERE `username` = '$message_user'";

$result = $conn->query($sql);

if ($result->num_rows > 0 && $currentuser != $message_user) {
    // output data of each row
    $sql = "INSERT INTO messenger.messages (`sender`, `reciever`, `datetime`, `message`) VALUES ('$currentuser', '$message_user', '$time', '$message')";
    $result = $conn->query($sql);
}
 ?>
