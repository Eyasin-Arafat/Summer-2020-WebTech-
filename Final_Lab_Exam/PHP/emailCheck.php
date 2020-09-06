<?php 
	session_start();
	require_once('../service/userService.php');

	if(isset($_POST['email']))
	{

		$status=checkEmail($_POST['email']);
		if($status)
		{
			echo "Email already taken";
		}		
	}

?>