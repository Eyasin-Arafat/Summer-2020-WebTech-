<!DOCTYPE HTML>  
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>HTML-Form Validation</title>
	</head>
	<body>
		<?php
		// define variables and set to empty values
		$name = $email = $gender = $dateofbirth = $degree = $bloodgroup = $profilepicture = $personprofile = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = test_input($_POST["name"]);
		$email = test_input($_POST["email"]);
		$gender = test_input($_POST["gender"]);
		$dateofbirth = test_input($_POST["date of birth"]);
		$degree = test_input($_POST["degree"]);
		$bloodgroup = test_input($_POST["blood group"]);
		$profilepicture = test_input($_POST["profile picture"]);
		$personprofile = test_input($_POST["person profile"]);
		}

		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
		?>

		<h1>HTML-Form Validation</h1>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			<b>Name</b><br>
			<input type="text" name="name"><br>
			<input type="submit" name="submit" value="Submit">
			<br><br>
			<b>E-mail</b><br>
			<input type="text" name="email"><br>
			<input type="submit" name="submit" value="Submit">
			<br><br>
			
			 <fieldset>
				<legend><b>Gender</b></legend>
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="other">Other
				<br><br>
			 </fieldset>
			 <input type="submit" name="submit" value="Submit"><br><br>
			 
			 <fieldset>
				<tr>
					<legend><td><b>Date of Birth</b></td></legend>
						<td>
							<p>&nbsp;&nbsp dd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp mm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp yyyy</p>
							 
							<input type="text" name="day"size="1px">/
							<input type="text" name="month"size="1px">/
							<input type="text" name="year"size="1px"> <br>
							 <hr>
								<input type="submit" name="submit" value="Submit">
							 </hr>
						</td>
						 
				</tr>
			 
			 </fieldset><br><br>
			 
			 <fieldset>
				<legend><b>Degree</b></legend>
					<input type="checkbox" name=""> SSC
					<input type="checkbox" name=""> HSC
					<input type="checkbox" name=""> BSc
			</fieldset>
			<input type="submit" name="submit" value="Submit"><br><br><br>
			
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
			
			 <form>
			 <fieldset>
			<table border="1" cellspacing="0" cellpadding="5" align="left" width="450px" height="auto">
				<tr>
					<td colspan="3" align="center" height="40%"><h1> PERSON PROFILE</h1></td>			
				</tr>
				<tr>
					<td  width="30%"><b>Name</b></td>
					<td width="30px">
						<input type="text" name="username" size="40px" height="150" width="150">
					</td>
					<td width="5%"></td>
				</tr>
				
				<tr>
					<td><b>Email</b></td>
					<td>
						<input type="email" name="email" size="40px">
					</td>
				</tr>
				<tr>
					<td><b>Gender</b></td>
					<td>
						<input type="radio" name="gender" value="" >  Male 
						<input type="radio" name="gender" value="" > Female
						<input type="radio" name="gender" value="" > Others
					</td>
				</tr>
				<tr>
					<td><b>Date of Birth</b></td>
					<td>
						<input type="text" name="day"size="5px">/
						<input type="text" name="month"size="5px">/
						<input type="text" name="year"size="5px">   <i>(dd/mm/yyyy)</i>
					</td>
				 
				</tr>
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
					</td>
				</tr>
				<tr>
					<td><b>Degree</b></td>
					<td>
						<input type="checkbox" name=""> SSC
						<input type="checkbox" name=""> HSC
						<input type="checkbox" name=""> BSc
						<input type="checkbox" name=""> MSc
					</td>
				 
				</tr>
				<tr>
					<td><b>Photo</b></td>
						<td colspan="2">
							<input type="file" name="" value="file">
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center" height="40px"></td>
				</tr>
				<tr>
					<td colspan="3" align="right">
						<input type="submit" name="" value="Submit"> 
						<input type="reset" name="" value="Reset"> 
					</td>
				</tr>
			</table><br>
			</fieldset>
			</form><br>
		</form><br>
			

		<?php
		echo "<h1>Your Input:</h1>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $gender;
		echo "<br>";
		echo $dateofbirth;
		echo "<br>";
		echo $degree;
		echo "<br>";
		echo $bloodgroup;
		echo "<br>";
		echo $profilepicture;
		echo "<br>";
		echo $personprofile;
		
		?>
		
	</body>
	
</html>