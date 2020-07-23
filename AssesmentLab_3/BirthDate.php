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

			$x="";
			$y="";
			$z="";
				if (isset($_GET['date']))
				{
					$x=(int)$_GET['date'];
					if ($x>0 && $x<=31) 
					{
					}
					else
					{
						$flag=false;
					}
				}
				if (isset($_GET['month']))
				{
					$y=(int)$_GET['month'];
					if ($y>0 && $y<=12) 
					{
					}
					else
					{
					$flag=false;
					}
				}
				if (isset($_GET['year'])) 
				{
					$z=(int)$_GET['year'];
					if ($z>=1950 && $z<=2021) 
					{
					}
					else
					{
					$flag=false;
					}
				}
				if($flag==true)
				{
					echo $x."<br>";
					echo $y."<br>";
					echo $z."<br>";
				}
				if ($flag==false) 
				{
					echo "invalid";
				}

		?>
		<!---php End Here--->
		
		<h1>HTML-Form Validation</h1>
		<form>
			<fieldset>
				<tr>
					<legend><td><b>Date of Birth</b></td></legend>
						<td>
							 <pre class="tab">  dd  	 mm   	yyyy</pre>
							<input type="text" name="day"size="1px">/
							<input type="text" name="month"size="1px">/
							<input type="text" name="year"size="1px"> 
							 <hr>
								<input type="submit" name="submit" value="Submit">
							 </hr>
						</td>
						 
				</tr>
			 </fieldset>
		</form>
	</body>
</html>