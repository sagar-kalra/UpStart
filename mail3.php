<?php
session_start();
$otp=$_SESSION['otp'];
$email=$_SESSION['email'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
echo $email;
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'skalra912@gmail.com';                 // SMTP username
    $mail->Password = 'clsagar27';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('skalra912@gmail.com', 'Sagar Kalra');
    $mail->addAddress($email, 'Aman nim');     // Add a recipient

  
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'hello';
    $mail->Body    = $otp;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    
} catch (Exception $e) {
    
}echo "
<html>
<body>
<form method='POST' action='otp2.php'>
Enter OTP:-
<input name='otp' type ='text'>
<button type ='submit' name='submit'> Submit </button>
</form>
</body>
</html>";
			
		
?>