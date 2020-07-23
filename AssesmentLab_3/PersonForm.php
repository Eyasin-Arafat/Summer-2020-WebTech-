<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>HTML-Form Validation</title>
	</head>
	<body>
<!--- php Start Here --->
	<?php
	$name="";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
       
			$name=$_POST["Manik"];
			if(strlen($name)<1 || $name=="")
		{
			echo "textfield can not be empty";
		}
		else { 
			if (is_numeric($name[0]))
			{
            echo "First letter cannot be numeric ";         
			}
           else{
                 if ($name[0]=="" && $name[1]=="")
                   {
                      echo "Name Must contain atleast 2 letter";
                    }
                     else { 
                             $length=strlen($name);
                             for($i=0; $i<$length; $i++)
                               {
                                    if($name[$i]>"a" || $name[$i]<"z" || $name[$i]>"A" || $name[$i]<"Z" || $name[$i]=="." || $name[$i]=="-")
                                            echo $name;
                                    	else 	
                                             {
                                              echo "only chararecters are allowed";
                                             }
                                    		


                               }

                          }

                } 


           }

		}

	?>
	
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
	
	<?php
		$genderNotification="";
		if(isset($_GET['gender']))
		{
			$gender=$_GET['gender'];
		}
		else
		{
			if(isset($_GET['submit']))
			{
				$genderNotification="Select Gender";
			}
		}
	?>
		
		<?php
			$dateNoti="";
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
				if ($flag==false) 
				{
					$dateNoti="Enter Valid date";
				}

		?>
		
		<?php
			$degreeNoti="";
				if (isset($_GET['x']) || isset($_GET['y']) || isset($_GET['z']) || isset($_GET['a'])) 
				{
			
				}
				else
				{
					if (isset($_GET['submit'])) 
					{
						$degreeNoti="Please Select a Degree";
					}
				}
		?>
			
		<?php
			$bgNoti="";
			if (isset($_GET['bg'])) 
			{
				$bgNoti="Select a blood group";
			}
		?>
		
		<?php
			$profileNoti="";
				if (isset($_GET['upload'])) 
				{
					$x=$_GET['upload'];
					if(empty($x)) 
					{
						$profileNoti="Select a file";
					}
				}
		?>
		
<!---php End Here--->

			<h1>Person Profile</h1>
			 <form>
					<table border="1" cellspacing="0" cellpadding="5" align="left" width="450px" height="auto">
					<tr>
						<td colspan="3" align="center" height="40%"><h1> PERSON PROFILE</h1></td>			
					</tr>
					<tr>
						<td  width="30%"><b>Name</b></td>
						<td width="30px">
							<input type="text" name="username" size="40px" height="150" width="150">
							<?php 
							echo $name
							?>
						</td>
						<td width="5%"></td>
					</tr>
				
					<tr>
						<td><b>Email</b></td>
						<td>
							<input type="email" name="email" size="40px">
							<?php 
							echo $email
							?>
						</td>
					</tr>
					<tr>
						<td><b>Gender</b></td>
						<td>
							<input type="radio" name="gender" value="" >  Male 
							<input type="radio" name="gender" value="" > Female
							<input type="radio" name="gender" value="" > Others
							<?php 
							echo $genderNotification
							?>
						</td>
					</tr>
					<tr>
						<td><b>Date of Birth</b></td>
						<td>
							<input type="text" name="day"size="5px">/
							<input type="text" name="month"size="5px">/
							<input type="text" name="year"size="5px">   <i>(dd/mm/yyyy)</i>
							<?php 
							echo $dateNoti
							?>
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
							<?php 
							echo $bgNoti
							?>
						</td>
					</tr>
					<tr>
						<td><b>Degree</b></td>
						<td>
							<input type="checkbox" name=""> SSC
							<input type="checkbox" name=""> HSC
							<input type="checkbox" name=""> BSc
							<input type="checkbox" name=""> MSc
							<?php 
							echo $degreeNoti
							?>
						</td>
				 
					</tr>
					<tr>
						<td><b>Photo</b></td>
							<td colspan="2">
								<input type="file" name="" value="file">
								<?php 
								echo $profileNoti
								?>
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
			</form><br>		
	</body>
</html>