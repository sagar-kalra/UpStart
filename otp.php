<?php
session_start();
$a=mt_rand(100000,999999);
echo $a;
$_SESSION['a']=$a;
$_SESSION['name']=$_POST['uname'];
$_SESSION['password']=$_POST['Password'];
$_SESSION['otp']=$a;
$email=$_POST['emailid'];
$_SESSION['email']=$email;

Header("Location: mail3.php");


?>