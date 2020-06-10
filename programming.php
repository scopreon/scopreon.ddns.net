<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Programming</title>
  <link rel="stylesheet" href="styles/format.css">
  <script src="scripts/math.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.3/p5.min.js"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
  <!--navigation bar-->
  <div>
    <nav>
      <ul class='navigation'>
        <li><a href="index.php">Home</a></li>
        <li><a class='current' href="programming.php">Programming</a></li>
        <li><a href="Chess.php">Chess</a></li>
        <li><a href="other.php">Other</a></li>
      </ul>
    </nav>
  </div>
  <div style='clear:left;' id='title'>
    <h1>Programming and stuff</h1>
    <p>This is where I'm gonna put some programming projects and tests</p>
  </div>
  <div id='yoloForm'>
    <h3>Yolo Spambot (by Saul Cooperman)</h3>
    <form action="yoloSpambot.php" method="post" target="hidden-form">
      <label>Link:</label>
      <input type="text" name="link" placeholder='https://onyolo.com/m/tphDmXwK6E?w=xyz'><br>
      <label>Message (max 15 char):</label>
      <input type="text" name="messages" maxlength=15><br>
      <label>Number of messages:</label>
      <input type="number" name="num" min="1" max="30">
      <input type="submit">
    </form>
    <IFRAME style='display:none' name='hidden-form'></IFRAME>
  </div>
  <div id='fractalGenerator'>
    <label><b>Generate a Julia fractal<b></label><br><br>
    <input type="text" id="real" value = ""> + <input type="text" id="imaginary" value = "">i <br><br>
    <button id="fractalSubmit" onclick = setup()>Generate</button>
  </div>
  <div id='fractal'>
    <script src="scripts/fractal.js"></script>
  </div>
</body>
</html>
