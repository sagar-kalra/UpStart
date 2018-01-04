<?php
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "bootstrap.css" />
	<link rel = "stylesheet" type = "text/css" href = "1.css" />
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
	
      </tr>
    </thead>
	<tbody>';
	while($row=mysqli_fetch_assoc($result))
	{
		if($row['EMAIL']==$_SESSION['emailid'])
		{
    echo'
      <tr>
        <td>'.$row['NAME'].'</td>
        <td>'.$row['TYPE'].'</td>
        <td>'.$row['FIELD'].'</td>
	
      </tr>';
	  goto a;
	}
	}
	echo '<form method="GET" action ="newstartup.php">
<button type ="submit"> Enter details of your startup </button>
</form> 
	}';
	a:
     echo '
    </tbody>
  </table>
</div>
<div align="center">
<form method="GET" action="listoffunders.php">
	<button type="submit" class="btn btn-primary">List of funders available on our site</button>
	</form>
	</div>';
	
echo '<div align="right">
<form action="logout.php">';
				echo '<button name="logout" class="btn btn-danger"> LOG OUT </button>';
				echo '</form>
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
</footer>

<!-- <footer style="background-color:#222">
	<div class="container">
				<div class="col-sm-6 text-center">
					<h2 class=""><b><font color="3ed30d">Quick Links</font></b></h2>
					<br/>
							<p class="description">
								<a href="about.html"><font color="#fff">About us</font></a><br/> <br/>
								<a href="work.html"><font color="#fff">How It Works?</font></a><br/> <br/>
								<a href="privacy.html"><font color="#fff">Privacy Policy</font></a> <br/>
								<a href="terms.html"><br/><font color="#fff">Terms & Conditions</font></a> <br />
							</p>
				</div>
				<div class="col-sm-4 text-center">
					<h2 class=""><b><font color="3ed30d">Contact Us</font><span class="open-blink"></span></b></h2>
					<br/>
					<p class="description">
					<font color="#fff">Address - UIET, Panjab University <br/>
					Chandigarh - 160014</font>
					<br/><br />
					<font color="#fff">E-mail - contact@upstart.com</font><br/><br />
					<font color="#fff">Phone - +91-9871166953</a></font>
					</p>
					
				</div>
		

		</div>
</footer> -->

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