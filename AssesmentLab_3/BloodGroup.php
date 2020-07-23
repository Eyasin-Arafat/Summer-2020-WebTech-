<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>HTML-Form Validation</title>
	</head>
	<body>
<!--- php Start Here --->
		 <?php

			if (isset($_GET['bg'])) 
			{
				echo $_GET['bg'];
			}
			else
				{
					if (isset($_GET['submit'])) 
					{
						echo "blood group selected";
					}
				}
		?>
<!---php End Here--->
		<h1>HTML-Form Validation</h1>
		<form>
			<fieldset>
				<tr>
					<td><b>Blood Group</b></td>
					<td>
						<select name="">
							<option value="">A+</option>
							<option value="">B+</option>
							<option value="">O+</option>
							<option value="">AB+</option>
							<option value="">A-</option>
							<option value="">B-</option>
							<option value="">O-</option>
							<option value="">AB-</option>
						</select>
					<hr>
						<input type="submit" name="submit" value="Submit">
					<hr>
					</td>
				</tr>
			</fieldset><br>
		</form>

	</body>
</html>