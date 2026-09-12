<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "college_lab";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>