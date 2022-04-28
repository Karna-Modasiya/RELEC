<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "relec";

    error_reporting(0);
    $errors = array();
    $conn = new mysqli($server, $username, $password, $dbname);
    if (!$conn) {
      die('Could not connect: ' . mysqli_error());  
    }
?>