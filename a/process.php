<html>

<!-- PHP Code  -->
<?php

session_start();
include "../config/db.php";
// Check connection
if (mysqli_connect_errno())
{
	die("Failed to connect to MySQL: " . mysqli_connect_error());
}
date_default_timezone_set("Asia/Kolkata");

}


$username=$_POST['username'];
$password=$_POST['pass'];

$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);


	$result= mysql_query("select * from login where username= '$username' and password = '$password'") or die("Failed".mysql_error());
	$row=mysql_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password)
	{
		echo " Login Success";
	}
	else
	{
		echo "Login Failed"
	}
?>
<head></head>
<body>

