<html>
  <head>
    <title>Welcome</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <div class = 'left'>
        <h1>Other</h1>
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
            <a href = 'Chess.php'><li>Chess</li></a>
            <a href = 'beemessenger/index.php'><li id='beemessenger'>Messenger</li></a>
            <a href = 'other.php'><li class = 'selected'>Other</li></a>
          </ul>
        </nav>
      </div>
      <div class="clear"></div>
    </header>
    <div class = 'main'>
      <p>nothing here yet...</p>
    </div>
    <script src = "scripts/scripts.js"></script>
  </body>
</html>
