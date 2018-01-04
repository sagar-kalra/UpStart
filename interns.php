<!DOCTYPE html>
<html>
<head>

		<link rel = "stylesheet" type = "text/css" href = "bootstrap.css" />
	<link rel = "stylesheet" type = "text/css" href = "imagehover.css" />
	<link rel = "stylesheet" type = "text/css" href = "1.css" />

<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

	<style type="text/css">
		#preloader {
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 999;
    overflow: visible;
    background: url('loader1.gif') no-repeat center center;
 }

#content {
    display: none;
}
	</style>
</head>


<body>

	<div id="preloader"></div>
    <div id="content" style="margin:0; padding:0">
    	<nav class="green">
	<div class="more-padding collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<img src="logo2.png" />
		<ul class="nav navbar-nav navbar-right main-nav">
			<li><a href="homepage2.php"><b>Home</b></a></li>
			<li><a href="about.html"><b>About Us</b></a></li>
			<li><a href="list.html"><b>Events</b></a></li>
			<li><a href="blog.html"><b>Videos</b></a></li>
			<li><a href="team.html"><b>Team</b></a></li>
		</ul>
	</div>
</nav>
<?php
$sql=' select * from intern';
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result))

