<?php
  session_start();
  include 'test.php';
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $sql = "SELECT * FROM messenger.user_data WHERE `username` = '$username' AND `password` =  '$password' ";

  $result = $conn->query($sql);

  if ($result->num_rows > 0 && $username!='') {
      // output data of each row
      $_SESSION['username'] = $username;
      header( "Location: index.php" );
      exit ;
  } else {
      echo 'there was a problem signing in';
  }
?>
