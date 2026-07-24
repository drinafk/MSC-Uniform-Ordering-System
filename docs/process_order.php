<?php
    require "Connection.php";
    $id = $_POST["verify_id"];
    $sql = "UPDATE orderdb SET status = 'ON PROCESS' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>