<!DOCTYPE html>
<?php 
session_start();
?>

<!-- PHP Code  -->
<?php
ob_start();

include "config/db.php";


// Check connection


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
		$error5 = array("Your username or password was incorrect.");


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
		$error5 = array("Your username or password was incorrect.");


	}
}

?>
<html lang="en">
<head>
	<title>Login V10</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
<!--===============================================================================================-->
</head>
<body>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action="" method="POST">
					<span class="login100-form-title p-b-51">						Login
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">


						<div>

							<?php if (isset($error5)): ?>
    <div class="form-errors">
        <?php foreach($error5 as $error): ?>
            <span class='txt1' style='color:red;'>&nbsp;<?php echo $error ?></span>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
<!-- Footer -->

<div id="footer">
    <div class="container">
        <div class="row">
            <br>
              <div class="col-md-4">
                <center>
                  <img src="http://nss.vidyaacademy.ac.in/images/tooplate_image_01.png"  class="img-circle img-responsive" alt="NSS Logo" height="100px" width="100px" style="margin-top:15px;">
                  <br>
                </center>
              </div>
              <div class="col-md-4">
               
              </div>
              <div class="col-md-4">
                <center>
                  <img src="http://www.scmsgroup.org/sset/images/logo.png" class="img-circle img-responsive" alt="NSS Logo"  height="100px" style="margin-top:15px;">
                  <br>
                </center>
              </div>
            </div>
    </div>
</div>

<!-- End -->

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script>
document.body.style.zoom = 1.0;
var scale = 'scale(1)';
document.body.style.webkitTransform = scale;      // Chrome, Opera, Safari
 document.body.style.msTransform =          scale;// IE 9
 document.body.style.transform = scale;     // General

	</script>

</body>
</html>