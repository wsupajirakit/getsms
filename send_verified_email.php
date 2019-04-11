<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

//Create a new PHPMailer instance
  $mail = new PHPMailer(true);

    $user_email = $_POST['email'];
    // $username='';
    // $password='';

    //Server settings
    // $mail->SMTPDebug = 2;                                      
    // $mail->isSMTP();                                       
    $mail->Host       = 'smtp.gmail.com';
    $mail->CharSet = 'utf-8';
    $mail->Username   = '';
    $mail->Password   = '';
    $mail->SMTPSecure = 'ssl'; // ssl
    $mail->Port       = 587; //587
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = true;

    $mail->setFrom('taolovemessi2@gmail.com', 'sender');
    $mail->addAddress($user_email, 'receive');

    // Content
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = 'verified Email';
    // $mail->msgHTML('<b>ยืนยันอีเมล</b> <a href="www.facebook.com/">facebook</a>');
    $mail->Body    = '<b>ยืนยันอีเมล</b> <a href="www.facebook.com/">facebook</a>';
    // $mail->AltBody = '';


    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }
