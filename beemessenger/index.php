
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="https://freeiconshop.com/wp-content/uploads/edd/documents-outline.png" />
  <link rel="stylesheet" href="registerstyle.css">
  <title>Login 🐝</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body class="formvalidator">
  <nav>
    <ul>
      <li><img src="BeeLogo.png" height="75px" style="margin-top: 4px; display: block; right:0;"></li>
      <li><a href='index.php'>Home <br> <img src="https://cdn2.iconfinder.com/data/icons/bee-farm-filled/64/bee_farm-04-512.png" width="30px"></a></li>
      <?php
        session_start();
        if(isset($_SESSION['username'])){
          echo "<li><a href='messageuser.php'>Message <br> <img src='https://cdn1.iconfinder.com/data/icons/feather-2/24/message-square-512.png' height='30px'></a></li>";
          echo "<li><a href='logout.php'>Logout <br> <img src='https://cdn2.iconfinder.com/data/icons/e-commerce-line-10-1/1024/logout10-512.png' height='30px'></a></li>";
        }
        else{
          echo "<li><a href='login.php'>Login <br> <img src='https://image.flaticon.com/icons/png/512/152/152533.png' height='30px'></a></li>";
          echo "<li><a href='register.php'>Register <br> <img src='https://simpleicon.com/wp-content/uploads/add-user.png' height='30px'></a></li>";
        }
      ?>
    </ul>
  </nav>

  <div class="container">
    <label id='homelabel'><b>Welcome to beemessenger 1.0</b><br>
    A social media like no other - built from the ground up on the phrase 'ya like jazz'.
   At the start of the summer 2020; together with my friend @zackylippy we gave life to
   this beautiful piece of art.<br><br> With over a whoping 20 active daily users the community is growing
  at an unforseeable rate.<br><br> Please make an account and add your friends with ease,
  although desktop/laptop use is heavily recommended for current use.<br><br> Please me on reddit
 at the username scopreon for any bug reports.<br><br> All code is my own.</label>
  </div>

</body>

</html>
