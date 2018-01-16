
<!DOCTYPE html>

<?php session_start(); ?>
<?php ob_start(); ?>

<?php 

$con = mysqli_connect("localhost","root","admin","NSS");





if(isset($_POST['submit']))
{
	$register= $_POST['register'];
	$query = "SELECT `Adno`, `name`, `parent_name`, `parent_occup`, `school`, `doa`, `dob`, `religion`, `scst`, `soa`, `sol`, `dol`, `tca`, `tcl`, `reason`, `dov`, `remarks` FROM `TABLE 1` WHERE `Adno` = $register";
	$result = $con->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    	$_SESSION['adno']=$adno = $row["Adno"];
    	$_SESSION['name']=$name = strtoupper($row["name"]);
    	$_SESSION['parent_name']=$parent_name = strtoupper($row["parent_name"]);
    	$_SESSION['parent_occup']=$parent_occup =  strtoupper($row["parent_occup"]) ;
    	$_SESSION['school']=$school =  strtoupper($row["school"]);
    	$_SESSION['doa']=$doa = strtoupper($row["doa"]); 
    	$_SESSION['dob']=$dob = strtoupper($row["dob"]);
    	$_SESSION['religion']=$religion = strtoupper($row["religion"]);
    	$_SESSION['scst']=$scst = strtoupper($row["scst"]);
    	$_SESSION['soa']=$soa = strtoupper($row["soa"]);
    	$_SESSION['sol']=$sol = strtoupper($row["sol"]);
    	$_SESSION['dol']=$dol = strtoupper($row["dol"]);
    	$_SESSION['tca']=$tca = strtoupper($row["tca"]);
    	$_SESSION['tcl']=$tcl = strtoupper($row["tcl"]);
    	$_SESSION['reason']=$reason = strtoupper($row["reason"]);
    	$_SESSION['dov']=$dov = strtoupper($row["dov"]);
    	$_SESSION['remarks']=$remarks = strtoupper($row["remarks"]); 
        
     }
 }
}
elseif($_SESSION['adno']!=null)
{

	header("Location: result.php");
}
else
{
	header("Location:index.html");
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
								<?php echo "<b>".$adno."</b>"; ?>
							</div>
							<div class="cell">
								<?php echo "<b>".$name."</b>"; ?>
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
								<?php echo "<b>".$adno."</b>"; ?>
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
								<?php echo "<b>".$name."</b>"; ?>
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
								<?php echo "<b>".$parent_name."</b>"; ?>
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
								<?php echo "<b>".$parent_occup."</b>"; ?>
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
								<?php echo "<b>".$school."</b>"; ?>
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
								<?php echo "<b>".$doa."</b>"; ?>
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
								<?php echo "<b>".$dob."</b>"; ?>
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
								<?php echo "<b>".$religion."</b>"; ?>
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
								<?php echo "<b>".$scst."</b>"; ?>
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
								<?php echo "<b>".$soa."</b>"; ?>
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
								<?php echo "<b>".$sol."</b>"; ?>
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
								<?php echo "<b>".$dol."</b>"; ?>
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
								<?php echo "<b>".$tca."</b>"; ?>
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
								<?php echo "<b>".$tcl."</b>"; ?>
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
								<?php echo "<b>".$reason."</b>"; ?>
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
								<?php echo "<b>".$dov."</b>"; ?>
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
								<?php echo "<b>".$remarks."</b>"; ?>
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