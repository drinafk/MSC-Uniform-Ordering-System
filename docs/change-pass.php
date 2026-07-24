<?php
  require "Connection.php";
  $pass1 = $_POST["pass"];
  $pass2 = $_POST["pass1"];
    $code1 = $_POST["code"];
    $sql = "SELECT * FROM accountdb WHERE verification = '$code1'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0 && $pass1 == $pass2) {
        $sql = "UPDATE accountdb SET pass = '$pass1'";
        $result = mysqli_query($conn, $sql);
    }else{
        echo "notmatch";
    }
    mysqli_close($conn);
?>