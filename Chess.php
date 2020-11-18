<html>
  <head>
    <title>Welcome</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.3/p5.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  </head>
  <body>
  </head>
  <body>

    <header>
      <div class = 'left'>
        <h1>Chess</h1>
      </div>
      <div class = 'right'>
        <label id='buttonnav'><img src='https://i0.wp.com/css-tricks.com/wp-content/uploads/2012/10/threelines.png' display= block;></label>
        <nav>
          <ul>
            <a href = 'index.php'><li>Home</li></a>
            <a id='programmingDropdown'><li >Programming
              <div class='dropdownmenu'>
                <!-- <button onclick='event.preventDefault()' id='dropdown'> testxg≈ggdxggxd</button> -->
                <ul class='dropdownmenulist'>
                  <li class='dropdownmenulist' onclick='event.preventDefault(); window.location.href = "./programming/java.php"'>Java</li>
                  <li class='dropdownmenulist' onclick='event.preventDefault(); window.location.href = "./programming/python.php"'>Python</li>
                  <li class='dropdownmenulist' onclick='event.preventDefault(); window.location.href = "./programming/other.php"'>Other</li>
                </ul>
              </div>
            </li></a>
            <a href = 'Chess.php'><li class = 'selected'>Chess</li></a>
            <a href = 'blog.php'><li>Blog</li></a>
            <a href = 'beemessenger/index.php'><li id='beemessenger'>Messenger</li></a>
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
    <script src = "scripts/scripts.js"></script>
  </body>
</html>
