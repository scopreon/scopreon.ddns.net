<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://freeiconshop.com/wp-content/uploads/edd/documents-outline.png" />
    <link rel="stylesheet" href="registerstyle.css">
    <title>Login 🐝</title>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="messageuserstyle.css">
  </head>
  <body class="formvalidator">
    <nav>
      <ul>
        <li><a href='index.php'>Home <br> <img src="https://cdn2.iconfinder.com/data/icons/bee-farm-filled/64/bee_farm-04-512.png" width="30px"></a></li>
        <li><a href='messageuser.php'>Message <br> <img src='https://cdn1.iconfinder.com/data/icons/feather-2/24/message-square-512.png' height='30px'></a></li>
        <li><a href='logout.php'>Logout <br> <img src='https://cdn2.iconfinder.com/data/icons/e-commerce-line-10-1/1024/logout10-512.png' height='30px'></a></li>
        <li><img src="BeeLogo.png" height="75px" style="margin-top: 4px; display: inline-block; position:absolute; right:0;"></li>
      </ul>
    </nav>
    <div class='container' id='messages'>
      <div id='mainMessenger'>
        <label id='name'><?php session_start();echo 'Hello '.$_SESSION['username'];?></label>
        <div id='newConvo'>
          <form action="new_convo.php" method="post" target="hidden-form">
             Message new user: <input autocomplete="false" type="text" name="username">
            <input type="submit" value = 'message'>
          </form>
        </div>

        <!---  new select box added at the top -->


        <div id='selectContact'>
          <div class="container1">
            <div class="dropdown">
              <div class="caption">Contacts</div>
                <div class="list"></div>
              </div>
          </div>
        </div>
      </div>
      <div id="messagesList"></div>
      <div id='messageBox'>
        <form action="message_user_script.php" method="post" target="hidden-form" id='myForm'>
          Message: <input autocomplete="false" type="text" name="message" id='messageBoxText'><br>
          <button type="button" id='buttonToClick' onclick="myFunc();">Submit</button>
        </form>
      </div>
      <IFRAME style='display:none' name='hidden-form'></IFRAME>
    </div>
    <script src="messages.js"></script>
    <script src="messagedropdown.js" charset="utf-8"></script>
  </body>
</html>
