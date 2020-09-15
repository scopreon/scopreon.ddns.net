<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://freeiconshop.com/wp-content/uploads/edd/documents-outline.png" />
    <link rel="stylesheet" href="registerstyle.css">
    <title>Login 🐝</title>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  </head>
  <body class="formvalidator">
    <nav>
      <ul>
        <li><a href='index.php'>Home <br> <img src="https://cdn2.iconfinder.com/data/icons/bee-farm-filled/64/bee_farm-04-512.png" width="30px"></a></li>
        <li><a href='messageuser.php'>Message <br> <img src='https://cdn1.iconfinder.com/data/icons/feather-2/24/message-square-512.png' height='30px'></a></li>
        <li><a href='logout.php'>Logout <br> <img src='https://cdn2.iconfinder.com/data/icons/e-commerce-line-10-1/1024/logout10-512.png' height='30px'></a></li>
        <li><img src="BeeLogo.png" height="75px" style="margin-top: 4px; display: inline-block; position: relative; right:0;"></li>
      </ul>
    </nav>
    <div class='container' id='messages'>
      <label id='name'><?php session_start();echo 'Hello '.$_SESSION['username'];?></label>
      <div id='mainMessenger'>
        <div id='newConvo'>
          <form action="new_convo.php" method="post" target="hidden-form">
             Message new user: <input autocomplete="false" type="text" name="username"><br>
            <input type="submit" value = 'message'>
          </form>
        </div>
        <div id='selectContact'>
          <form>
            <select id="users" onchange="document.getElementById('messagesList').innerHTML=``;get_message(this.value)">
              <option value="">Select a person:</option>
            </select>
          </form>
        </div>
      </div>
      <div id="messagesList"><b>Person info will be listed here...</b></div>
      <div id='messageBox'>
        <form action="message_user_script.php" method="post" target="hidden-form">
          Message: <input autocomplete="false" type="text" name="message"><br>
          <input type="submit" value = 'message'>
        </form>
      </div>
      <IFRAME style='display:none' name='hidden-form'></IFRAME>
    </div>
    <script src="messages.js"></script>
  </body>
</html>
