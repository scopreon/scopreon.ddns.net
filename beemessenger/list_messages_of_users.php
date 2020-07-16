<?php
  session_start();
  include 'test.php';
  $contact = $_GET['q'];
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM messenger.messages WHERE (`sender` = '$username' AND `reciever` = '$contact') OR (`sender` = '$contact' AND `reciever` = '$username')";

  $result = $conn->query($sql);
  echo "<table id='table_of_users'>
    <tr>
    <th>id</th>
    <th>sender</th>
    <th>reciever</th>
    <th>datetime</th>
    <th>message</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['sender'] . "</td>";
      echo "<td>" . $row['reciever'] . "</td>";
      echo "<td>" . $row['datetime'] . "</td>";
      echo "<td>" . $row['message'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  ?>
