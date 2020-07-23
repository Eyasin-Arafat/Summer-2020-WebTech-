<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>HTML-Form Validation</title>
	</head>
	<body>
<!--- php Start Here --->
		<?php
			if(isset($_GET['gender']))
			{
				$gender=$_GET['gender'];
				echo $gender;
			}
			else
			{	 
			if(isset($_GET['submit']))
			{
				echo "Please Select A Gender";
			}
			}
		?>
<!---php End Here--->
			<h1>HTML-Form Validation</h1>
			<form> 
				 <fieldset>
						<legend><b>Gender</b></legend>
						<input type="radio" name="gender" value="female">Female
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="other">Other
						<br><br>
				</fieldset>
				<input type="submit" name="submit" value="Submit"><br><br>
			</form>

	</body>
</html>