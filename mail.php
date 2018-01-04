<?php
session_start();
include 'db.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$email = $_POST['emailid'];
$sql=' select * from startup';
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result))
		{ if($row['emailid'] == $email)
			{$_SESSION['emailid']=$email;



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
    $mail->addAddress($email, 'http://localhost/StartUP/resetpassword.php');     // Add a recipient

  
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'http://localhost/StartUP/resetpassword.php';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    
}
			}
		}
?>