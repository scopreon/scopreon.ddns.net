<?php

    session_start();
    include 'test.php';
    $username = $_SESSION['username'];
    $sql = "SELECT `sender` FROM messenger.messages WHERE `reciever` = '$username'";

    $result = $conn->query($sql);
    echo "<table id='table_of_users'>
      <tr>
      <th>contacts</th>
      </tr>";
      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['sender'] . "</td>";
        echo "</tr>";
      }
      $sql = "SELECT `reciever` FROM messenger.messages WHERE `sender` = '$username'";
      $result = $conn->query($sql);
      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['reciever'] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
?>
