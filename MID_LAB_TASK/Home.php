<?php
	session_start();
		echo "<h1> WELCOME".$_SESSION['uname']."</h1>";
		
			if($_SESSION['type']=="user")
			{
?>
	<!DOCTYPE HTML>
	<html lang="en-US">
		<head>
			<meta charset="UTF-8">
			 <title>User's Home page</title>
		</head>
		<body>
			<a href="Profile.html">Profile</a>
			<a href="ChangePassword.html">Change Password</a>
			<a href="Logout.html">Logout</a>
		</body>
	</html>

<?php
	}
	else
	{
?>
	<!DOCTYPE HTML>
	<html lang="en-US">
		<head>
			<meta charset="UTF-8">
			 <title>Admin's Home Page</title>
		</head>
		<body>
			<a href="Profile.html">Profile</a>
			<a href="ChangePassword.html">Change Password</a>
			<a href="Logout.html">Logout</a>
		</body>
	</html>
<?php
}
?>