<html>
  <body>
    <?php
      session_start();
      if(isset($_SESSION['username'])){
        echo "<a href='messageuser.php'>message</a> ";
        echo "<a href='logout.php'>logout</a>";
      }
      else{
        echo "<a href='login.php'>login</a> ";
        echo "<a href='register.php'>register</a>";
      }
    ?>
  </body>
</html>
