<?php
session_start();
require_once('connection.php');
// var_dump(mail('sahabdummy@gmail.com','ddd','dddd'));
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'sahabdummy@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'Dummy12@';
$mail->setFrom('sahabdummy@gmail.com', 'Dummy Sahab');





if(isset($_SESSION['user']) && $_SESSION['user']['role_id']==1){
    if(isset($_REQUEST['action']) && $_REQUEST['action']=='activate'){
        mysqli_query($connection,"UPDATE users set status=1 where user_id='".$_REQUEST['id']."'");
            $mail->addAddress($_REQUEST['email']);
            $mail->Subject = 'Account Status';
            $mail->msgHTML("<b>Your Account is Activated</b>");
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                header('location:admin.php?message=welcome !&msg=user Activate successfully and Mail Sent!');die;
            }

    }elseif(isset($_REQUEST['action']) && $_REQUEST['action']=='deactivate'){
        mysqli_query($connection,"UPDATE users set status=0 where user_id='".$_REQUEST['id']."'");
        $mail->addAddress($_REQUEST['email']);
        $mail->Subject = 'Account Status';
        $mail->msgHTML("<b>Your Account is deactivated</b>");
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
        header('location:admin.php?message=welcome !&msg=user deactivate successfully and Mail Sent!');die;
        }
    }
} elseif(isset($_SESSION['user']) && $_SESSION['user']['role_id']==2){
   header('location:user.php?message=welcome !');die;
} else{
    header('location:index.php?message=login first');
}
?>