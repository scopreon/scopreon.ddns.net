
<html>
  <body>
    <a href='login.php'>login</a>
    <a href='register.php'>register</a>
    <br>
    <?php
      session_start();
      if (isset($_SESSION['username'])){
        echo 'You have been logged out';
      }
      else {
        echo 'You were never logged in';
      }
      session_unset();
      session_destroy();
    ?>

  </body>
</html>
