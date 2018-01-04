<?php
session_start();
include 'db.php';
$newpassword = $_POST['newpassword'];
$emailid=$_SESSION['emailid'];
$sql = "UPDATE startup SET pwd='$newpassword' WHERE emailid='$emailid'";
$update =mysqli_query($conn,$sql);
session_destroy();
Header('Location: homepage2.php');
?>