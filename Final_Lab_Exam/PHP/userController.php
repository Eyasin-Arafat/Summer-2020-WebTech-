<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
	
	
	if(isset($_POST['create']))
	{
		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		

		if(empty($username) || empty($password) || empty($email))
		{
			header('location: ../views/register.php?error=null_value');
		}
		else
		{

			$user = [
						'username'=> $username,
						'email'=> $email
						'password'=> $password,
						
					];

			$status = insert($user);

			if($status)
			{
				header('location: ../views/all_users.php?success=done');
			}
			else
			{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}
	

	if(isset($_POST['edit']))
	{
		$id 		= $_POST['id'];
		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		
		

		if(empty($username) || empty($password) || empty($email))
		{
			header('location: ../views/edit.php?id={$id}');
		}
		else
		{

			$user = [
						'username'=> $username,
						'password'=> $password,
						'email'=> $email,
						'id'=> $id
					];

				$status = update($user);

			if($status)
			{
				header('location: ../views/all_users.php?success=done');
			}
			else
			{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}
?>