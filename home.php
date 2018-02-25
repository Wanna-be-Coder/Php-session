<?php
session_start();
if($_SESSION["username"] == null){header("location:index.php");}

?>
<!DOCTYPE html>
<head>

	<title>Welcome to the session Demo</title>

</head>

<body>
	<h1>Home</h1>
	
	<a href="uinfo.php"><h3>user info</h3></a>
	<a href="Iinfo.php"><h3>user login info</h3></a>
	<form action="logout.php" method="GET">
		<button type="submit" name="logout">Logout</button>
	</form>
	

</body>