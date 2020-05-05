<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Programming</title>
  <link rel="stylesheet" href="styles/format.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
  <!--navigation bar-->
  <div>
    <nav>
      <ul class='navigation'>
        <li><a href="index.php">Home</a></li>
        <li><a class='current' href="programming.php">Programming</a></li>
        <li><a href="other.php">Other</a></li>
      </ul>
    </nav>
  </div>
  <div style='clear:left;' id='title'>
    <h1>Programming and stuff</h1>
    <p>This is where I'm gonna put some programming projects and tests</p>
  </div>
  <div id='yoloForm'>
    <h3>Yolo Spambot</h3>
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
</body>
</html>
