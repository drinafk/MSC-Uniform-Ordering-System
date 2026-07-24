<?php
  require "Connection.php";
  $email = $_POST["email"];
    $pass = $_POST["pass"];
    $sql = "SELECT * FROM accountdb WHERE email = '$email' AND pass = '$pass'";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) <= 0){
      echo "Invalid";
    }
?>