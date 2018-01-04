<?php
include 'db.php';
session_start();
$otp=$_POST['otp'];
if($_SESSION['a']==$otp)
{	$hash=password_hash($_SESSION['password'], PASSWORD_DEFAULT);
	$sql="INSERT INTO startup (NAME, emailid, pwd, otp) VALUES ('{$_SESSION['name']}', '{$_SESSION['email']}', '$hash', '$otp')";
	$update=mysqli_query($conn,$sql);
	echo "Registered";
	if(password_verify($_SESSION['password'], $hash))
	{
		echo"yoyo";
	}
}
else {
	echo"Incorrect OTP";
}
?>