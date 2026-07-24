<?php
    require "Connection.php";
    $id = $_POST["verify_id"];
    $date = date('Y-m-d');
    $sql = "UPDATE orderdb SET status = 'CLAIMED', date_claimed = '$date' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>