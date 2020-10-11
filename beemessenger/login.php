<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="https://pbs.twimg.com/profile_images/666015590155468800/PYdlf_Ki.png" />
  <link rel="stylesheet" href="registerstyle.css">
  <title>Login 🐝</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body class="formvalidator">
    <nav>
      <ul>
          <li class="beelogo"><img src="BeeLogo.png" height="75px" class="logo" style="margin-top: 4px; display: block; right:0;"></li>
          <div class="navtop">
              <li><a href='index.php' class="homelink1">Home <br> <img src="https://cdn2.iconfinder.com/data/icons/bee-farm-filled/64/bee_farm-04-512.png" width="30px"></a></li>
              <?php
                  echo "<li><a href='login.php'>Login <br> <img src='https://image.flaticon.com/icons/png/512/152/152533.png' height='30px'></a></li>";
                  echo "<li><a href='register.php'>Register <br> <img src='https://simpleicon.com/wp-content/uploads/add-user.png' height='30px'></a></li>";
              ?>
          </div>
      </ul>
  </nav><br>

  <div class="container">
    <!-- <form action="login_confirm.php" method="post" id='form' class='form'>
      Username: <input type="text" name="user"><br>
      Password: <input type="text" name="pass"><br>
      <input type="submit" value='login'>
    </form> -->

    <form action="login_confirm.php" method="post" id='form' class='form'>
      <h2 class="register">Login</h2>
      <div class="form-control">
        <label for="username">Username</label>
        <input autocomplete="false" type="text" id="username" name="user" placeholder="Enter username">
        <small class="username"></small>
      </div>
      <div class="form-control">
        <label for="password">Password</label>
        <input autocomplete="false" type="password" id="password" name="pass" placeholder="Enter password">
        <small class="password"></small>
      </div>
      <button type="sumbit" id="btn1" class="hover">
        <span id="submittext">Login</span>
      </button>
    </form>
  </div>
</body>
</html>
