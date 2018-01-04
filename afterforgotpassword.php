<?php

require 'C:\wamp64\www\PHPMailer\PHPMailerAutoload.php';
echo "it works";
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'skalra912@gmail.com';
$mail->Password = 'clsagar27';
$mail->SMTPSecure = 'tls';

$mail->From = 'skalra912@gmail.com';
$mail->FromName = 'Sagar Kalra';
$mail->addAddress('amannim20@gmail.com', 'Aman Nim');

$mail->addReplyTo('skalra912@gmail.com', 'Sagar Kalra');

$mail->WordWrap = 50;
$mail->isHTML(true);

$mail->Subject = 'Using PHPMailer';
$mail->Body    = 'Hi Iam using PHPMailer library to sent SMTP mail from localhost';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';