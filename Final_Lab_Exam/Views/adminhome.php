<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<h1>Welcome Home!<?=$_SESSION['username']?></h1> 
	<a href="../views/register.php">Create New User</a> |
	<a href="../views/users.php">User List</a> |
	<a href="../views/search.php">Search</a> |
	<a href="../php/logout.php">Logout</a> 
</body>
</html>