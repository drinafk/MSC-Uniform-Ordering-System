<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "Connection.php";
    require "Mailer/src/Exception.php";
    require "Mailer/src/PHPMailer.php";
    require "Mailer/src/SMTP.php";

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'gonzales.johndominique@mscmarinduque.edu.ph';
    $mail->Password = 'pypvdynjibteamiw';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('gonzales.johndominique@mscmarinduque.edu.ph','MSC-UOS');
    $mail->addAddress('skadivalo@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = 'Verification Code';
    $otp = rand(100000,999999);
    
    $mail->Body = 'Your OTP: ' . $otp;

    try{
        if($mail->send()){
            $sql= "UPDATE accountdb SET verification = '$otp'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
        }
    }catch(Exception $e){
    }
?>