<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "bootstrap.css" />
	<link rel = "stylesheet" type = "text/css" href = "2.css" />
</head>
<body>
<nav class="green">
	<div class="more-padding collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<img src="logo2.png" />
		<ul class="nav navbar-nav navbar-right main-nav">
			<li><a href="index.html"><b>Home</b></a></li>
			<li><a href="about.html"><b>About Us</b></a></li>
			<li><a href="work.html"><b>Events</b></a></li>
			<li><a href="our_team.html"><b>Team</b></a></li>
		</ul>
	</div>
</nav>



<form action='afternewstartup.php' method ='GET'>
<input name='nameofstartup' type='text' placeholder='Name of Startup'>
<select name='type'>
	<option value='Lifestyle Start-up'>Lifestyle Start-up</option>
	<option value='Small Business Start-up'>Small Business Start-up</option>
	<option value='Buyable Start-up'>Buyable Start-up</option>
	<option value='Large Company Start-up'>Large Company Start-up</option>
	<option value='Social Start-up'>Social Start-up</option>
	<option value='Scalable Start-up'>Scalable Start-up</option>
</select>
<input name='field' type='text' placeholder='Field'>
<button type ='Submit'> SUBMIT </button>
</form>
</body>
</html>	