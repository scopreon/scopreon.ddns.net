<?php
session_start();
include 'test.php';
$username = $_POST['username'];
$message = $_POST['message'];
$currentuser = $_SESSION['username'];
date_default_timezone_set("Europe/London");
$time = date("Y-m-d H:i:s");
$sql = "SELECT * FROM messenger.user_data WHERE `username` = '$username'";

$result = $conn->query($sql);

if ($result->num_rows > 0 && $currentuser != $username) {
    // output data of each row
    echo 'username exists';
    echo '<br';
    $sql = "INSERT INTO messenger.messages (`sender`, `reciever`, `datetime`, `message`) VALUES ('$currentuser', '$username', '$time', '$message');";
    $result = $conn->query($sql);
    echo 'message sent';

} else {
    echo 'invalid usernams';
}
 ?>
<br>
return to <a href='index.php'>home</a>
