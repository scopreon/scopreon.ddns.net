<html>
  <head>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  </head>
  <body>
    <a href='messageuser.php'>message</a>
    <a href='logout.php'>logout</a>
    <br>
    <?php
      session_start();
      echo 'Hello '.$_SESSION['username'];
    ?>
    <form action="message_user_script.php" method="post">
      Username: <input type="text" name="username"><br>
      Message: <input type="text" name="message"><br>
      <input type="submit" value = 'message'>
    </form>
    <IFRAME style='display:none' name='hidden-form'></IFRAME>
    <div id="info"><b>Person info will be listed here...</b></div>
    <form>
      <select id="users" onchange="get_message(this.value)">
        <option value="">Select a person:</option>
      </select>
    </form>
    <script src="messages.js"></script>
  </body>
</html>
