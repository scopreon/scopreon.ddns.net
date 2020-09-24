<html>
  <head>
    <title>Welcome</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.3/p5.min.js"></script>
    <script src="scripts/math.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  </head>
  <body>
    <header>
      <div class = 'left'>
        <h1>Programming</h1>
      </div>
      <div class = 'right'>
        <nav>
          <ul>
            <a href = 'index.php'><li>Home</li></a>
            <a href = 'programming.php'><li class = 'selected'>Programming</li></a>
            <a href = 'Chess.php'><li>Chess</li></a>
            <a href = 'blog.php'><li>Blog</li></a>
            <a href = 'beemessenger/index.php'><li>Messenger (alpha)</li></a>
            <a href = 'other.php'><li>Other</li></a>
          </ul>
        </nav>
      </div>
      <div class="clear"></div>
    </header>
    <div class = 'main'>
      <div id = 'yoloSpambot'>
        <h5>YOLO spambot</h5>
        <div id='yoloForm'>
          <form action="yoloSpambot.php" method="post" target="hidden-form">
            <label>Link:</label>
            <input type="text" name="link" placeholder='https://onyolo.com/m/tphDmXwK6E?w=xyz'><br>
            <label>Message (max 15 char):</label>
            <input type="text" name="messages" maxlength=15><br>
            <label>Number of messages:</label>
            <input type="number" name="num" min="1" max="30"><br>
            <input type="submit">
          </form>
          <IFRAME style='display:none' name='hidden-form'></IFRAME>
        </div>
      </div>
      <div id = 'fractalGenerator'>
        <h5>Julia fractal generator</h5>
        <input type="number" id="real" min="-1" max="1"> + <input type="number" id="imaginary" min="-1" max="1">i
        <button id="fractalSubmit" onclick = setup()>Generate</button>
        <div id='fractal'>
          <script src="scripts/fractal.js"></script>
        </div>
      </div>
    </div>
  </body>
</html>
