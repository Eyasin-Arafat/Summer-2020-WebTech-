<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>HTML-Form Validation</title>
	</head>
	<body>
		 
	<?php
	$email="";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$email=$_POST["eyasin.arafat.manik@gmail.com"];
		if(strlen($email)<1 || $email=="")
		{
			echo "textfield can not be empty";
		}
		else
		{
			if (!filtervar($email,FILTER_VALIDATE_EMAIL))
			{
             echo "invalid email formate";

			}
			else 
			{
				echo $email;

			}
      }  

	}
	?>
	<h1>HTML-Form Validation</h1>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		<b>E-mail</b><br>
			<input type="text" name="email"><br>
			<input type="submit" name="submit" value="Submit">
			<br><br>
		</form>

	</body>
</html>