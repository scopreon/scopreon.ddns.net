<?php
  session_start();
  include 'test.php';
  $contact = $_GET['q'];
  $length = $_GET['l'];
  if($contact == 'undefined'){
    $contact=$_SESSION['message_viewing'];
  }
  else{
    $_SESSION['message_viewing']=$contact;
  }

  $username = $_SESSION['username'];
  $sql = "SELECT * FROM messenger.messages WHERE (`sender` = '$username' AND `reciever` = '$contact') OR (`sender` = '$contact' AND `reciever` = '$username') LIMIT 18446744073709551610 OFFSET $length ";


  $result = $conn->query($sql);
  echo "<table id='table_of_users'>
    <tr>
    <th>sender</th>
    <th>reciever</th>
    <th>message</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['sender'] . "</td>";
      echo "<td>" . $row['reciever'] . "</td>";
      echo "<td>" . $row['message'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  ?>
