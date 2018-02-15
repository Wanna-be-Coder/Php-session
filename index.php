<?php
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
var_dump($error);
}
else
{
	header("location:home.php");
}
}
?>
<!DOCTYPE html>
<html>
<head>

	<title>Welcome to the session Demo</title>

</head>
<body>
	<h1>Login</h1>
	<form action="" method="POST">
		<b>Username</b> <input type="text" name="name" placeholder="Username"></br></br>
		<b>Password</b> <input type="password" name="pass" placeholder="Password"></br></br>
		<button type="submit" name="submit" value="Submit">Submit</button>
	</form>
	<a href="reg.php" >Signup here</a>
	<span><?php echo $error ?></span>
</body>
</html>
