<?php 
    session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';





    if(isset($_REQUEST['submit'])){
        $mail = new PHPMailer();
        $mail->isSMTP();
        
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;
        $mail->Username = 'sahabdummy@gmail.com';
        $mail->Password = 'Dummy12@';
        
        extract($_REQUEST);
        extract($_FILES);
        extract($file);
        
        $mail->setFrom($from);

        $mail->addAddress($to);
        $mail->addCC($cc);
        $mail->addBCC($bcc);
        $mail->Subject = $sub;
        $mail->msgHTML(htmlspecialchars($msg));
        $mail->addAttachment("images/$name");
            if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
            echo 'Message sent!';
            }
          
    }
    
    ?>