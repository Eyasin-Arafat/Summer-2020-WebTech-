<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
	</head>
	<body>
		<h2>Welcome Home!<?=$_SESSION['username']?></h2> 
		<a href="../views/create.php">Create New User</a> |
		<a href="../views/all_users.php">User List</a> |
		<a href="../php/logout.php">Logout</a> 
	</body>
</html>