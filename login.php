<?php
	include 'db.php';
	session_start();
?>
<html>
	<body>
		<form method='POST' action='afterlogin.php' >
			<input type='text' name='emailid' placeholder='Email ID'>
			<input type='password' name='password' placeholder='Password'>
			<button type='submit' name='login'>
				LOG IN!!
			</button>
		</form>
		<a href ='forgotpassword.php'>Forgot Password? </a>
	

	
	
	</body>
</html>
	
	