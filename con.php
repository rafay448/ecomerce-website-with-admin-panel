<?php
    // db connection
    $servername = "localhost";
    $username = "rafaydig_rafaydigital";
    $password = "Z5*tVtWt8XjW";
    $db_name = "rafaydig_rafaydigital";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>