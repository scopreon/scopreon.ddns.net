<?php
  session_start();
  include 'test.php';
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $sql = "SELECT * FROM messenger.user_data WHERE `username` = '$username' AND `password` =  '$password' ";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      echo 'valid login';
      $_SESSION['username'] = $username;
  } else {
      echo 'invalid login';
  }
?>
<br>
return to <a href='index.php'>home</a>
