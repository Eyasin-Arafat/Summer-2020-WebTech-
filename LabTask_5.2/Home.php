<!DOCTYPE HTML>
	<html lang="en-US">
		<head>
			<meta charset="UTF-8">
			 <title>Home</title>
		</head>
		<body>
<!---PHP Start Here--->
<?php
	session_start();
	if($_SESSION['status'] == "Ok") 
	{}
		else
		{
		header('location: login.php');
		}
?>
<!---PHP End Here--->
			<h1>Welcome home!</h1> <a href="logout.php"> Logout</a>
		</body>
	</html>
