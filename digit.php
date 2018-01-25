<?php session_start(); ?>
<?php ob_start(); ?>
<?php 



if(!isset($_SESSION['username']))
{
	header("Location: index.php");
}


if(isset($_POST['number']))
{
	header("Location:1.php");
}
elseif(isset($_POST['year']))
{
	header("Location:2.php");
}
elseif(isset($_POST['all']))
{
	header("Location:3.php");
}
?>
<!DOCTYPE html>
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
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">

            <a class="btn btn-outline-primary" href="logout.php">Logout</a>
      <nav class="my-2 my-md-0 mr-md-3">

      </nav>

    </div>

	<div class="limiter">
		<div class="container-login100" style="min-height: 65vh;">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action="" method="POST">

					<span class="login100-form-title p-b-51">						<?php echo "Logged as {$_SESSION['username']} " ?>
					</span>

					
<form action="">

					<div class="container-login100-form-btn m-t-17">

						<button class="login100-form-btn" name="number">

							Search by Admission Number
						</button>
					</div>
										<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="year">
							Search by Year
						</button>
					</div>
															<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="all">
							All Data
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

</body>
</html>