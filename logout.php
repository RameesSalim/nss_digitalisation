<?php session_start(); ?>
<?php ob_start(); ?>
<?php 

$con = mysqli_connect("localhost","root","admin","NSS");

		$_SESSION['username']= null;
		$_SESSION['password']= null;
		$_SESSION['flag']=0;


if(!isset($_SESSION['username']))
{
	header("Location: index.php");
}