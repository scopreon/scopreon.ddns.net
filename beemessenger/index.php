
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="https://pbs.twimg.com/profile_images/666015590155468800/PYdlf_Ki.png" />
  <link rel="stylesheet" href="registerstyle.css">
  <title>Home 🐝</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body class="formvalidator">
  <nav>
    <ul>
        <li class="beelogo"><img src="BeeLogo.png" height="75px" class="logo" style="margin-top: 4px; display: block; right:0;"></li>
        <div class="navtop">
            <li><a href='index.php' class="homelink1">Home <br> <img src="https://cdn2.iconfinder.com/data/icons/bee-farm-filled/64/bee_farm-04-512.png" width="30px"></a></li>
            <?php
            error_reporting(E_ERROR);
            // ^ to stop me from getting those errors
              session_start() ;
              if(isset($_SESSION['username'])){
                echo "<li><a href='messageuser.php'>Message <br> <img src='https://cdn1.iconfinder.com/data/icons/feather-2/24/message-square-512.png' height='30px'></a></li>";
                echo "<li><a href='logout.php'>Logout <br> <img src='https://cdn2.iconfinder.com/data/icons/e-commerce-line-10-1/1024/logout10-512.png' height='30px'></a></li>";
              }
              else{
                echo "<li><a href='login.php'>Login <br> <img src='https://image.flaticon.com/icons/png/512/152/152533.png' height='30px'></a></li>";
                echo "<li><a href='register.php'>Register <br> <img src='https://simpleicon.com/wp-content/uploads/add-user.png' height='30px'></a></li>";
              }
            ?>
        </div>
    </ul>
  </nav>
<div class="wrapper">
    <label id='name'><?php
    if(isset($_SESSION['username'])){
     echo 'Logged in as: '.$_SESSION['username'];
 } else{
     echo 'Please log in <a href="login.php"> here </a>';
 }
     ?></label>
    <div class="container">
      <label id='homelabel'><b>🐝 Welcome to Bee Messenger 🐝</b><br><br>
      The greatest new social media website of 2020 - built from scratch from the phrase 'ya like jazz'.<br>
     This beautiful piece of art was given life to by me and my friend @zaclippy.<br><br> With over a whopping 20 active daily users the community is growing
    at an unforseeable rate!<br><br> Please make an account and share with your friends!<br><br> If you find any bugs or problems, report them to me on reddit -
   u/scopreon.<br><br> Feel free to pen-test it, although don't try any bruteforce as it runs on my own server, this will inevitably lead to server crashing. Let me know<br><br> All code is my own.<br><br>Enjoy!</label>
  </div>

  <div class="containerleft">
      <label id='currentusers'>Current users: <br> <span class="numbers">
          <?php
          session_start();
          include 'test.php';
          $sql = "SELECT * FROM messenger.user_data";
          $result = $conn->query($sql);
          echo $result->num_rows;
           ?>
      </span></label>
  </div>
  <div class="containerright">
      <label id='currentversion'>Current version: <br><span class="numbers">Bee Messenger 1.0</span></label>
  </div>
  <div class="containerfull">
    Current time: <?php
    $time = time();
echo("<br>" . date("H:i",$time) . ",  ");
echo(date("d/m/Y",$time));
?>
</div>
  <?php
  if(isset($_SESSION['username'])){
    echo "<button><a href='logout.php'>Log out <br> <img src='https://cdn2.iconfinder.com/data/icons/e-commerce-line-10-1/1024/logout10-512.png' height='20px'></a></button>";
  } ?>
</div>
</body>

</html>
