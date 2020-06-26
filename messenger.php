<html>
  <head>
    <title>Welcome</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  </head>
  <body>
    <header>
      <div class = 'left'>
        <h1>Messenger</h1>
      </div>
      <div class = 'right'>
        <nav>
          <ul>
            <a href = 'index.php'><li>Home</li></a>
            <a href = 'programming.php'><li>Programming</li></a>
            <a href = 'Chess.php'><li>Chess</li></a>
            <a href = 'blog.php'><li>Blog</li></a>
            <a href = 'messenger.php'><li class = 'selected'>Messenger (alpha)</li></a>
            <a href = 'other.php'><li>Other</li></a>
          </ul>
        </nav>
      </div>
      <div class="clear"></div>
    </header>
    <container class = 'centreContainer'>
      <div id = 'login'>
        <form>
          <h2>Login</h2>
          <label>Username</label>
          <input type = 'text'>
          <label>Password</label>
          <input type = 'password'><br>
          <label id = 'forgotPassword'>Forgot password?</label>
          <input type="submit" value = 'Login'>
        </form>
        <IFRAME style='display:none' name='hidden-form'></IFRAME>
      </div>
    </container>
  </body>
</html>
