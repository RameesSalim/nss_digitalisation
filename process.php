
<?php session_start(); ?>
<!-- PHP Code  -->
<?php
ob_start();

$con = mysqli_connect("localhost","root","admin","NSS");

$_SESSION['flag']=0;

// Check connection
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['pass'];

$username=stripcslashes($username);
$password=stripcslashes($password);

$username=mysqli_real_escape_string($con,$username);
$password=mysqli_real_escape_string($con,$password);


	$result= mysqli_query($con,"SELECT * FROM `login` WHERE `username` ='$username' AND `password`='$password'");

	$row=mysqli_fetch_array($result);
	if($row['username'] != $username && $row['password'] != $password)
	{
		header("Location: index.php");
		$_SESSION['flag']=1;

	}
	elseif($row['username'] == $username && $row['password'] == $password)
	{
		$_SESSION['username']= $row['username'];
		$_SESSION['password']= $row['password'];
		header("Location: digit.php");

	}
	else
	{
		header("Location: index.php");
		$_SESSION['flag']=1;


	}
}

echo "ABCD";
?>

</body>
</html>
