<?php session_start(); ?>
<?php ob_start(); ?>
<?php 

$con = mysqli_connect("localhost","root","admin","NSS");

//Values

/*$_SESSION['adno']=$adno ="";
    	$_SESSION['name']=$name ="";
    	$_SESSION['parent_name']=$parent_name ="";
    	$_SESSION['parent_occup']=$parent_occup ="";
    	$_SESSION['school']=$school ="";
    	$_SESSION['doa']=$doa ="";
    	$_SESSION['dob']=$dob="";
    	$_SESSION['religion']=$religion="";
    	$_SESSION['scst']=$scst="";
    	$_SESSION['soa']=$soa ="";
    	$_SESSION['sol']=$sol ="";
    	$_SESSION['dol']=$dol="";
    	$_SESSION['tca']=$tca ="";
    	$_SESSION['tcl']=$tcl ="";
    	$_SESSION['reason']=$reason ="";
    	$_SESSION['dov']=$dov ="";
    	$_SESSION['remarks']=$remarks ="";*/
    	$_SESSION['data']=array();



if(!isset($_SESSION['username']))
{
	header("Location: index.php");
}
if(isset($_POST['submit']))
{
	$_SESSION['register']= $_POST['register'];
	$query = "SELECT `Adno`, `name`, `parent_name`, `parent_occup`, `school`, `doa`, `dob`, `religion`, `scst`, `soa`, `sol`, `dol`, `tca`, `tcl`, `reason`, `dov`, `remarks` FROM `TABLE 2` WHERE `Adno` =".$_SESSION['register'];
	$result = $con->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

 
    	$_SESSION['data'] =array("adno"=>$row["Adno"],"name"=>$row["name"],"parent_name"=>$row["parent_name"],"parent_occup"=>$row["parent_occup"],"school"=>$row["school"],"doa"=>$row["doa"],"dob"=>$row["dob"],"religion"=>$row["religion"],"scst"=>$row["scst"],"soa"=>$row["soa"],"sol"=>$row["sol"],"dol"=>$row["dol"],"tca"=>$row["tca"],"tcl"=>$row["tcl"],"reason"=>$row["reason"],"dov"=>$row["dov"],"remarks"=>$row["remarks"]);

    	header("Location: result.php");
        
     }
 }
 else
 {
 	$error1 = array("Data not found");
 }
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
      <a href="digit.php"><h5 class="my-0 mr-md-auto font-weight-normal">Back</h5></a>
      <nav class="my-2 my-md-0 mr-md-3">

        <a class="p-2 text-dark" href="#">&nbsp;</a>
        <a class="p-2 text-dark" href="#">&nbsp;</a>
      </nav>
      <a class="btn btn-outline-primary " href="logout.php">Logout</a>
    </div>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action="" method="POST">

					<span class="login100-form-title p-b-51">						<?php echo "Logged as {$_SESSION['username']} " ?>
					</span>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Register Number is Required">
						<input class="input100" type="text" name="register" placeholder="Enter Register Number">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">

					<div>
						<?php if (isset($error1)): ?>
    <div class="form-errors">
        <?php foreach($error1 as $error): ?>
            <span class='txt1' style='color:red;'>&nbsp;<?php echo $error ?></span>
        <?php endforeach;$error1=null; ?>
    </div>
<?php endif; ?>

</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="submit">
							Submit
						</button>
					</div>
										<div class="flex-sb-m w-full p-t-3 p-b-24">



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