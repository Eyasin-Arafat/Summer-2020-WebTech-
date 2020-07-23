<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>HTML-Form Validation</title>
	</head>
	<body>
<!--- php Start Here --->
		 <?php

			if (isset($_GET['x']) || isset($_GET['y']) || isset($_GET['z'])) 
			{
				if (isset($_GET['x'])) 
				{
					echo $_GET['x']."<br>";
				}
				if (isset($_GET['y'])) 
				{
					echo $_GET['y']."<br>";
				}
				if (isset($_GET['z'])) 
				{
					echo $_GET['z']."<br>";
				}
			}
			else
				{
					if (isset($_GET['submit'])) 
					{
						echo "At least one has to be selected";
					}
				}
			?>
<!---php End Here--->
		<h1>HTML-Form Validation</h1>
		<form>
			<fieldset>
			 
				<legend><b>Degree</b></legend>
					<input type="checkbox" name=""> SSC
					<input type="checkbox" name=""> HSC
					<input type="checkbox" name=""> BSc
			 	
			</fieldset>
			<input type="submit" name="submit" value="Submit"><br><br><br>
		</form>
	</body>
</html>