<?php
    require "Connection.php";
    $id = $_POST["verify_id"];
    $sql = "UPDATE orderdb SET status = 'FINISHED' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>