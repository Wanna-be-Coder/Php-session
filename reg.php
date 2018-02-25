<?php

$passerror = "";

if(isset($_POST["submit"]))
{
	//Data Sanitization function
function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
//Data Sanitization
$name  = test_input($_POST["name"]);
$pass  = test_input($_POST["pass"]);
$rpass = test_input($_POST["rpass"]);
$email = test_input($_POST["email"]);
$phone = test_input($_POST["phone"]);
$fname = test_input($_POST["fname"]);
if(empty($name) || empty($pass) || empty($rpass) || empty($email) || empty($phone) || empty($fname)){
	echo "Fill the required fields";

}

else if($pass != $rpass){
	$passerror = "Password is not matched";
	echo $passerror;
}

else{
//File declaration	
$myfile="Information.txt";
//Checking if the File exsist
if (file_exists($myfile)) {
$fh = fopen($myfile, 'a');
fwrite($fh, "\n");
fwrite($fh, "Username:");  
fwrite($fh,$name);
fwrite($fh, "\n");
fwrite($fh, "Password:");
fwrite($fh, $pass);
fwrite($fh, "\n");
fwrite($fh, "email:");
fwrite($fh, $email);
fwrite($fh, "\n");
fwrite($fh, "phone:");
fwrite($fh, $phone);
fwrite($fh, "\n");
fwrite($fh, "fname:");
fwrite($fh, $fname);

}
else{ 
//File Creation
$fh = fopen("Information.txt", "w") or die("Unable to open file!");

fwrite($fh, "\n");  
fwrite($fh,$name);
fwrite($fh, "Username:");
fwrite($fh, "\n");
fwrite($fh, "Password:");
fwrite($fh, $pass);
fwrite($fh, "\n");
fwrite($fh, "email:");
fwrite($fh, $email);
fwrite($fh, "\n");
fwrite($fh, "phone:");
fwrite($fh, $phone);
fwrite($fh, "\n");
fwrite($fh, "fname:");
fwrite($fh, $fname);
}

fclose($fh);
header("location:index.php");
}
}

?>
<!DOCTYPE html>
<head>

	<title>Welcome to the session Demo</title>

</head>

<body>
	<h1>Login</h1>
	<form action="" method=POST>
		<b>Username</b> <input type="text" name="name" placeholder="Username"></br></br>
		<b>Password</b> <input type="password" name="pass" placeholder="Pass"></br></br>
		<b>Re-Password</b> <input type="password" name="rpass" placeholder="Pass"></br></br>
		<b>Email</b> <input type="email" name="email" placeholder="email"></br></br>
		<b>Phone</b> <input type="text" name="phone" placeholder="Phone"></br></br>
		<b>Full Name</b> <input type="text" name="fname" placeholder="Full name"></br></br>
			<button type="submit" name="submit">Submit</button>
	</form>


</body>