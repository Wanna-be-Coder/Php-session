<?php
session_start();
if($_SESSION["username"] == null){header("location:index.php");}

?>
<!Doctype html>
<html>
<head>
	<title>uinfo</title>
</head>

<body>

    <h1>User Info<h1>
	
	<?php
			echo $_SESSION["username"];

    ?>
<br>
	<?php		
			
			echo $_SESSION["password"];
			
	?>
		


	</table>
	
	<form action="logout.php" method="GET">
		<button type="submit" name="logout">Logout</button>
	</form>

	<form action="home.php">
		<button type="submit" name="home">Home</button>
	</form>

</body>

</html>