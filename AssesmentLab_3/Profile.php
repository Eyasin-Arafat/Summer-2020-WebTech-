<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>HTML-Form Validation</title>
	</head>
	<body>
<!--- php Start Here --->
		<?php
			$flag=true;
				if(isset($_GET['id']))
				{
					$x=(int)($_GET['id']);
					if ($x<1) 
					{
						$flag=false;
					}
				}
				if (isset($_GET['upload'])) 
				{
					$x=$_GET['upload'];
					if(empty($x)) 
					{
						$flag=false;
					}
				}
				else
				{
					if (isset($_GET['submit'])) 
					{
						echo "Upload Successful";
					}
				}

		?>
<!---php End Here--->
		<h1>HTML-Form Validation<h1>
		<form>
			 <fieldset>
				<legend><b>Profile Picture</b></legend>
					<b>Username ID</b>: <input type="text" name="" value="" placeholder="username"> <br><br>
					<tr>
						<td><b>Picture:</b></td>
							<td colspan="2">
								<input type="file" name="" value="file">
								<hr>
									<input type="submit" name="submit" value="Submit">
								<hr>
							</td>
					</tr>
					 
			</fieldset><br><br>
		</form>
</body>
</html>