
<!DOCTYPE html>

<?php session_start(); ?>
<?php ob_start(); ?>

<?php 

$con = mysqli_connect("localhost","root","admin","NSS");


if(!isset($_SESSION['username']))
{
	header("Location: index.php");
}





    

?>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/table_util.css">
	<link rel="stylesheet" type="text/css" href="css/table_main.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
<!--===============================================================================================-->
</head>
<body>
<?php
							if($_SESSION['flag_n'] == 1)
							{
							echo "
							<span class='txt1' style='color:red;'>
								" .$_SESSION[adno_n]."Already exists
							</span>";
							$_SESSION['flag_n'] =0;
						}
						elseif (!isset($_SESSION['flag_n'])) {
							$_SESSION['flag_n'] =0;
						}
							?>
<!-- 	<?php echo $adno_n." Already exists in name " . $_SESSION['name_n'] ?> -->
	<form action="confirm.php" method="post">
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								<?php echo "<b>".$_SESSION['adno']."</b>"; ?>
							</div>
							<div class="cell">
								<?php echo "<b>".$_SESSION['name']."</b>"; ?>
							</div>
							<div class="cell">
							<button class="btn btn-primary confirm" name="confirm">Save</button>
							</div>
							<div class="cell" >
								<a href="result.php"><button class="btn btn-primary" type="button">Back</button></a>
							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Admission No :
							</div>
							<div class="cell" data-title="Age">
								
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['adno']; ?>" name="adno_n">
							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Name :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" class="wrap-input100" value="<?php echo $_SESSION['name']; ?>" name="name_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								Name of parent or Guardian and the relationship of the Guardian : :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['parent_name']; ?>" name="parent_name_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								Occupation of parent or Guardian and his residence :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['parent_occup']; ?>" name="parent_occup_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								School previuosly attended the Periods spent in each Std :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['school']; ?>" name="school_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								Date of Admission :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['doa']; ?>" name="doa_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								Date of Birth :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['dob']; ?>" name="dob_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								Religion :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['religion']; ?>" name="religion_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								Does the pupil belongs to SC/ST , OBC or he/she convert from SC/ST :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['scst']; ?>" name="scst_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								Standard on Admission :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['soa']; ?>" name="soa_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								Standard on Leaving :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['sol']; ?>" name="sol_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								Date of Leaving :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['dol']; ?>" name="dol_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								No. & Date of Transfer Certificate produced on admission :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['tca']; ?>" name="tca_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								No & Date of certificate of transfer granted on Leaving :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['tcl']; ?>" name="tcl_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								Reason for Leaving :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['reason']; ?>" name="reason_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								Date of Vaccination :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['dov']; ?>" name="dov_n">
							</div>
						</div>
												<div class="row">
							<div class="cell" data-title="Full Name">
								Remarks :
							</div>
							<div class="cell" data-title="Age">
							
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['remarks']; ?>" name="remarks_n">
							</div>
						</div>
			</div>
		</div>
	</div>
</div>
</form>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/table_main.js"></script>

</body>
</html>