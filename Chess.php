<html>
  <head>
    <title>Welcome</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.3/p5.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  </head>
  <body>
  </head>
  <body>
    <header>
      <div class = 'left'>
        <h1>Chess</h1>
      </div>
      <div class = 'right'>
        <nav>
          <ul>
            <a href = 'index.php'><li>Home</li></a>
            <a href = 'programming.php'><li>Programming</li></a>
            <a href = 'chess.php'><li class = 'selected'>Chess</li></a>
            <a href = 'other.php'><li>Other</li></a>
          </ul>
        </nav>
      </div>
      <div class="clear"></div>
    </header>
    <div class = 'main'>
      <div id='chessBoard'>
        <script src="Chess/board.js"></script>
        <script src="Chess/cell.js"></script>
      </div>
    </div>
  </body>
</html>
