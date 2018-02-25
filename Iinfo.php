<?php
session_start();
if($_SESSION["username"] == null){header("location:index.php");}
$count =0;
$index=0;
$user_Info=array();
function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?>
<!DOCTYPE html>
<head>

	<title>Welcome to the session Demo</title>

</head>

<body>
	<h1>Iinfo</h1>
	<?php
	
	foreach($_SESSION["login_info"] as $value)
	{
		$key = test_input($value);
		if($_SESSION["username"]==$key)
		{
			$index=$count;
		}
		$count++;
	}


	$user_Info=array_slice($_SESSION["login_info"],$index,5);

	foreach ($user_Info as $key) {
		echo "<option>$key</option>" . PHP_EOL ;
	}


	

	?>

	<form action="logout.php" method="GET">
		<button type="submit" name="logout">Logout</button>
	</form>
	<br>
	<form action="home.php">
		<button type="submit" name="home">Home</button>
	</form>
	


</body>