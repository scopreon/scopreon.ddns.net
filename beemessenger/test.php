<?php
$servername = "localhost";
$username = "root";
$password = "dragon123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    if ($ignore_errors == true) {
        echo("Error");
    }
    else {
        die("Connection failed: " . $conn->connect_error);
    }
}
?>
