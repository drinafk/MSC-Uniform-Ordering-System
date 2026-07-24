<?php
    require "Connection.php";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require "Mailer/src/Exception.php";
    require "Mailer/src/PHPMailer.php";
    require "Mailer/src/SMTP.php";

    $id = $_POST["student_id"];
    $sql = "SELECT * FROM orderdb WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    try {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'gonzales.johndominique@mscmarinduque.edu.ph';
        $mail->Password = 'pypvdynjibteamiw';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('gonzales.johndominique@mscmarinduque.edu.ph','MSC-UOS (Garments)');
        $mail->addAddress($data['email']);

        $mail->isHTML(true);

        $mail->Subject = 'NEOTECH';
        $mail->Body = '<pre style="color: white;">Dear student, 
        
        We are pleased to inform you that your uniform order is now finished and ready to be claimed at the Garments Section.
        
        Please visit the Garments Section during our operating hours to pick up your order. If you have any remaining balance, kindly bring the payment with you at the time of pickup.
        
        Thank you for using the MSC Uniform Ordering System!
        
        Best regards,
        Marinduque State College</pre>';
        $mail->send();
    } catch (Exception $e) {
    }
?>