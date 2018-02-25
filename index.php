<?php
$error=''; 
$login_info = array("");
$check1=false;
$check2=false;

function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
if (isset($_POST['submit'])) {
	$name = test_input("Username:".$_POST['name']);
	echo $name;
	$pass = test_input("Password:".$_POST['pass']);
	echo $pass;
	
	$login_info = array();
if (empty($_POST['name']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
var_dump($error);
}
else
{	
$myfile = fopen("Information.txt", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("Information.txt"));
// Output one line until end-of-file
while(!feof($myfile)) {
 array_push($login_info, fgets($myfile),fgets($myfile));

}
fclose($myfile);



   foreach ($login_info as $key) 
   {
		$value = test_input($key);
		if($name==$value){
		$check1=true;
		echo "/n".$key;

	}
    foreach ($login_info as $key) 
    {
    	$value = test_input($key);
		if($pass==$value){
		$check2=true;
		echo "/n".$key;
	}


		if($check1==true && $check2==true)
		{
	session_start();
	$_SESSION["username"] = $name;
    $_SESSION["password"] = $pass;
    $_SESSION["login_info"]=$login_info;
	header("location:home.php");
		}



echo $error;
}

}
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
