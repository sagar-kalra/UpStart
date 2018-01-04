<!DOCTYPE html>
<?php
include 'db.php';
session_start();
$type= $_SESSION['type'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "bootstrap.css" />
	<link rel = "stylesheet" type = "text/css" href = "1.css" />
</head>
<body>
<div class="alert alert-danger">
<strong> Can't Proceed!</strong> User must be signed in to proceed.
</div>
<nav class="green">
	<div class="more-padding collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<img src="logo2.png" />
		<ul class="nav navbar-nav navbar-right main-nav">
			<li><a href="homepage.php"><b>Home</b></a></li>
			<li><a href="about.html"><b>About Us</b></a></li>
			<li><a href="work.html"><b>Events</b></a></li>
			<li><a href="our_team.html"><b>Team</b></a></li>
			
			<button style="margin: 20px" id="myBtn1">LOG IN</button>
			<button style="margin: 20px" id="myBtn">SIGN UP</button>
		</ul>
	</div>
</nav>



    <title>Sign-UP</title>
    <link rel="stylesheet" type="text/css" href="sign-up.css">
	
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Alfa Slab One">
    <style>

.modal {
    display: none;
    position: fixed; 
    z-index: 1; 
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto; 
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}


.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
form {
    background-color: #203957;
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    margin-right: 10px;
    border: none;
    cursor: pointer;
    float: right;
    display: block;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>
<body>


<div id="myModal" class="modal">
<?php 
echo '<form class="col-md-6 col-md-offset-3" method="POST" action="aftersignup.php">
<span class="close"><img src="error.png"></span>
<h2 style="text-align: center;font-family: "Alfa Slab One"><font color="white">Signup Form</font></h2>

  <div class="imgcontainer">     
  </div>

  <div class="col-md-6 col-md-offset-3 container">
    <label><b><font color="white">Name</font></b></label>
    <input type="text" placeholder="Enter Name" name="uname" required>

    <label><b><font color="white">E-Mail</font></b></label>
    <input type="text" placeholder="Enter E-Mail" name="emailid" required>

    <label><b><font color="white">Password</font></b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>

    <label><b><font color="white">Confirm Password</font></b></label>
    <input type="password" placeholder="Enter Password" name="Password1" required>
	<input type="hidden" name="type" value='.$type.'>
    <br>
    <br>
    <br>
    <button class="col-md-4 col-md-offset-4" type="submit"><font color="white">Register</font></button>
  </div>';
  ?>

  
</form>



</div>

<div id="myModal1" class="modal">

  
    
<?php
    echo '
<form class="col-md-6 col-md-offset-3" method="POST" action="afterlogin.php">
<span class="close1"><img src="error.png"></span>

<h2 style="text-align: center;font-family: "Alfa Slab One"><font color="white">Login Form</font></h2>
  <div class="imgcontainer">     
  </div>

  <div class="col-md-6 col-md-offset-3 container">
    <label><b><font color="white">Email ID</font></b></label>
    <input type="text" placeholder="Enter Email ID" name="emailid" required>

    <label><b><font color="white">Password</font></b></label>
	<input type="password" placeholder="Enter Password" name="password" required>
	<input type="hidden" name="type" value='.$type.'>
    <br>';
	?>
    <br>
    <br>
    <button class="col-md-4 col-md-offset-4" type="submit"><font color="white">Login</font></button>
  </div>

  <div class="container col-md-6 col-md-offset-3">
    <p class="psw" style="text-align: center;"><a href="forgotpassword.php">Forgot password?</a></p>
  </div>
</form>



</div>
<script>

var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

    var modal1 = document.getElementById('myModal1');

var btn1 = document.getElementById("myBtn1");

var span1 = document.getElementsByClassName("close1")[0];

btn1.onclick = function() {
    modal1.style.display = "block";
}

span1.onclick = function() {
    modal1.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>
</center>
<?php
	$sql=' select * from newstartup';
	$result=mysqli_query($conn,$sql);
	echo'	<div class="container">          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name of Startup</th>
        <th>Type of the Startup</th>
        <th>Belonging Field of the Startup</th>
		<th> </th>
      </tr>
    </thead>
	<tbody>';
	while($row=mysqli_fetch_assoc($result))
	{
	
    echo'
      <tr>
        <td>'.$row['NAME'].'</td>
        <td>'.$row['TYPE'].'</td>
        <td>'.$row['FIELD'].'</td>
		<td><a href="sign-up2.php">Proceed>>>> </a></td>
      </tr>';
	}
    echo' 
    </tbody>
  </table>
</div>';
?>
<footer style="background-color:#222">
	<div class="container">


				<div class="col-md-4 text-center" style="margin-top:30px; margin-bottom:30px;">
					<b><p style="font-size:14px; color: #fff">QUICK LINKS</p></b>
					<br/>
							<p style="font-size:14px;">
								<a href="about.html"><font color="#8f8f8f">About us</font></a><br/> <br/>
								<a href="work.html"><font color="#8f8f8f">How It Works?</font></a><br/> <br/>
								<a href="privacy.html"><font color="#8f8f8f">Privacy Policy</font></a> <br/>
								<a href="terms.html"><br/><font color="#8f8f8f">Terms & Conditions</font></a> <br />
							</p>
				</div>
				<div class="col-md-4 text-center" style="margin-top:30px; margin-bottom:30px;">
					<b><p style="font-size:14px; color: #fff">OUR PARTNERS</p></b>
					<br/>
							<p style="font-size:14px;">
								<a href="about.html"><font color="#8f8f8f">Google</font></a><br/> <br/>
								<a href="work.html"><font color="#8f8f8f">Amazon</font></a><br/> <br/>
								<a href="privacy.html"><font color="#8f8f8f">Mahindra</font></a> <br/>
								<a href="terms.html"><br/><font color="#8f8f8f">Bugatti Veyron</font></a> <br />
							</p>
				</div>
				<div class="col-md-4 text-center" style="margin-top:30px; margin-bottom:30px;">
					<b><p style="font-size:14px; color: #fff">FOLLOW US ON</p></b>
					<br/>
							<p style="font-size:14px;">
								<a href="about.html"><font color="#8f8f8f">Facebook</font></a><br/> <br/>
								<a href="work.html"><font color="#8f8f8f">Twitter</font></a><br/> <br/>
								<a href="privacy.html"><font color="#8f8f8f">Google Plus</font></a> <br/>
							</p>
				</div>

		</div>

<style>
	.hr-sect {
	display: flex;
	flex-basis: 100%;
	align-items: center;
	color: #5D5D5F;
	margin: 8px 0px;
}
.hr-sect::before,
.hr-sect::after {
	content: "";
	flex-grow: 1;
	background: #5D5D5F;
	height: 1px;
	font-size: 0px;
	line-height: 0px;
	margin: 0px 8px;
}
	</style>
	
	<footer style="margin-top:-40px;">
			<div class="col-sm-12" style="background-color: #333338">
			<div class="hr-sect" style="margin-top:20px;"><img src="logo2.png" height="60px;"></div>
			<br />
			<br />
			<br />
			<br />
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-12">
					<center><ul class="social-footer" style="margin-top: -130px; ">
						<li><a href="https://www.facebook.com/Aasap.live/?ref=bookmarks"><img src="facebook.png" height="30px"/></a></i></a></li>
						<li><a href="https://www.instagram.com/aasap.live/"><img src="instagram.png" height="30px" /></i></a></li>
						<li><a href="https://plus.google.com/u/1/109086853399396588989"><img src="google-plus.png" height="30px" /></i></a></li>
					</ul></center>
					<p align="justify"><font size="2px" color="grey"><center>Copyright 2017 © UPSTART. All Rights Reserved. <br/>
The content and images used on this site are copyright protected and copyrights vests with the respective owners. The usage of the 
content and images on this website is intended to promote the works and no endorsement of the artist shall be implied. Unauthorized 
use is prohibited and punishable by law.</center></font></p>
<br/>
				</div>
			</div>
			</div>
			</footer>



    </div>




    <script type="text/javascript">
    	var preloader;

function preload(opacity) {
    if(opacity <= 0) {
        showContent();
    }
    else {
        preloader.style.opacity = opacity;
        window.setTimeout(function() { preload(opacity - 0.05) }, 250);
    }
}

function showContent() {
    preloader.style.display = 'none';
    document.getElementById('content').style.display = 'block';
}

document.addEventListener("DOMContentLoaded", function () {
    preloader = document.getElementById('preloader');
    preload(1);
});
    </script>
    	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58f3b4b130ab263079b600ef/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>