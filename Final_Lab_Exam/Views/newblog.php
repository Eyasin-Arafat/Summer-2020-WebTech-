<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="../php/saveBlog.php" method="post">
			<table>
				<tr>
					<td>
						Blog Id
					</td>
					<td>
						<input type="text" name="blogId" name="">
					</td>
				</tr>
				<tr>
					<td>
						Blog Body
					</td>
					<td>
						<input type="text" name="blogbody" name="">
					</td>
				</tr>
				<tr>
					<td>
						Blog Body
					</td>
					<td>
						<input type="submit" name="submit" name="">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>