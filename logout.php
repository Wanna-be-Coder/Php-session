 

<?php

if(isset($_GET['logout'])){
session_start();
session_unset();
$_SESSION["username"] = "";
$_SESSION["password"] = "";
session_destroy();
header("location:index.php");
}

?>