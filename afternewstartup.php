<?php
session_start();
include 'db.php';
$nameofstartup=$_GET['nameofstartup'];
$_SESSION['nameofstartup']=$nameofstartup;

$type=$_GET['type'];
$field=$_GET['field'];
$email=$_SESSION['emailid'];
$name=$_SESSION['name'];

$sql="INSERT INTO newstartup (NAME, TYPE, FIELD, EMAIL, NAMEOFS) VALUES ('$nameofstartup','$type','$field','$email','$name')";
$update=mysqli_query($conn,$sql);
header("Location: startuplogin.php");
?>