<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Ajax</title>
	</head>
	<body>
		<h2 id="abc">Search Employee</h2>
		<a href="all_users.php">Back</a>
		<form>
			<input type="text" id="name" name="name" onkeyup="load()" /> 
			<input type="button" id="button" name="button" value="Click" /> 
		</form>
		<div id="searchdata"></div>
		<script>
			function load(){
				var name = document.getElementById('name').value;
				var xhttp = new XMLHttpRequest();
				xhttp.open('POST', '../php/search.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('name='+name);
				xhttp.onreadystatechange = function (){
					if(this.readyState == 4 && this.status == 200){
						if(this.responseText != ""){
							document.getElementById('searchdata').innerHTML = this.responseText;
						}else{
							document.getElementById('searchdata').innerHTML = "";
						}
						
					}	
				}
			}
		</script>
	</body>
</html>