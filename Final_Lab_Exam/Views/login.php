<?php
	if (isset($_GET['error'])) 
	{
		
		if($_GET['error'] == 'null_value')
		{
			echo "Username/Password field can't left empty...";
		}

		if($_GET['error'] == 'invalid_user')
		{
			echo "Invalid username or Password";
		}

		if($_GET['error'] == 'invalid_request')
		{
			echo "You have to login first...";
		}

	}
	else if(isset($_GET['success']))
	{
		
		if($_GET['success'] == 'registration_done')
		{
			echo "Registration Done! Please login...";
		}
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>
	<body>

		<form action="../php/logCheck.php" method="post">
			<fieldset>
				<legend>Signin</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
</html>