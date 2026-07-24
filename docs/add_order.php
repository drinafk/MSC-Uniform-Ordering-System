<?php
    require "Connection.php";
    $name = $_POST["name"];
    $course = $_POST["course"];
    $email = $_POST["email"];
    $num = $_POST["num"];
    $type = $_POST["type"];
    $gender = $_POST["gender"];
    $top_size = $_POST["top_size"];
    $top_quantity = $_POST["top_quantity"];
    $bottom_size = $_POST["bottom_size"];
    $bottom_quantity = $_POST["bottom_quantity"];
    $necktie = $_POST["necktie"];
    $payment = $_POST["payment"];
    $status = $_POST["status"];
    $sql = "INSERT INTO orderdb(name, course, email, num, type, gender, top_size, top_quantity, bottom_size, bottom_quantity, necktie, payment, status)
                        VALUES('$name', '$course', '$email', '$num', '$type', '$gender', '$top_size', '$top_quantity', '$bottom_size', '$bottom_quantity', '$necktie', '$payment', '$status')";
    $result = mysqli_query($conn, $sql);
?>