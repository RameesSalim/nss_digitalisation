
<!DOCTYPE html>

<?php session_start(); ?>
<?php ob_start(); ?>

<?php 

$con = mysqli_connect("localhost","root","admin","NSS");

if(!isset($_SESSION['username']))
{
	header("Location: index.php");
}
elseif(!isset($_SESSION['data']['adno']) || $_SESSION['data']['adno'] == "")
{
	header("Location: digit.php");
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
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								<?php echo "<b>".$_SESSION['data']['adno']."</b>"; ?>
							</div>
							<div class="cell">
								<?php echo "<b>".$_SESSION['data']['name']."</b>"; ?>
							</div>
							<div class="cell">
								<a href="edit.php"><button class="btn btn-primary">Edit</button></a>
							</div>
							<div class="cell">
								<a href="print.php"><button class="btn btn-primary">Print</button></a>
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
								<?php echo "<b>".$_SESSION['data']['adno']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['name']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['parent_name']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['parent_occup']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['school']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['doa']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['dob']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['religion']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['scst']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['soa']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['sol']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['dol']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['tca']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['tcl']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['reason']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['dov']."</b>"; ?>
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
								<?php echo "<b>".$_SESSION['data']['remarks']."</b>"; ?>
							</div>
						</div>
			</div>
		</div>
	</div>


	

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