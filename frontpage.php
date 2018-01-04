<html>
<body>
<?php
session_start();
$_SESSION['type']= $_GET['type'];
?>
<a href = 'login.php'> LOG IN </a>
<a href = 'signup.php'> SIGN UP </a>
</body>
</html>
