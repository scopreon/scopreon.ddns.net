<?php
  /*session_start();
  include 'test.php';
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM messenger.messages WHERE `sender` = '$username' OR `reciever` = '$username'";

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
    echo "</table>";*/

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
