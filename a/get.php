<?php session_start(); ?>
<?php ob_start(); ?>

<?php 

include "./config/db.php";

if(!isset($_SESSION['username']))
{
	header("Location: index.php");
}


if(isset($_POST['submit']))
{
	$register= $_POST['register'];
	$query = "SELECT `Adno`, `name`, `parent_name`, `parent_occup`, `school`, `doa`, `dob`, `religion`, `scst`, `soa`, `sol`, `dol`, `tca`, `tcl`, `reason`, `dov`, `remarks` FROM `TABLE 2` WHERE `Adno` = $register";
	$result = $con->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    	$adno = $row["Adno"];
    	$name = strtoupper($row["name"]);
    	$parent_name = strtoupper($row["parent_name"]);
    	$parent_occup =  strtoupper($row["parent_occup"]) ;
    	$school =  strtoupper($row["school"]);
    	$doa = strtoupper($row["doa"]); 
    	$dob = strtoupper($row["dob"]);
    	$religion = strtoupper($row["religion"]);
    	$scst = strtoupper($row["scst"]);
    	$soa = strtoupper($row["soa"]);
    	$sol = strtoupper($row["sol"]);
    	$dol = strtoupper($row["dol"]);
    	$tca = strtoupper($row["tca"]);
    	$tcl = strtoupper($row["tcl"]);
    	$reason = strtoupper($row["reason"]);
    	$dov = strtoupper($row["dov"]);
    	$remarks = strtoupper($row["remarks"]); 
        
     }
 }
}
else
{

	header("Location: index.php");
}


    

?>
<html>
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


<div class="table100 ver4 m-b-110">
<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th style="text-align:center;"><?php echo "<b>".$name."</b>"; ?></th>
									<th class="cell100 column1" ><a href="edit.php"><button class="btn btn-primary" name="Print">Edit Data</button></a></th>
									<th class="cell100 column2"><a href="print.php"><button class="btn btn-primary" name="Print">Print</button></a></th>
																
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body table-responsive">

						<table class="table">

							<tbody>
								<tr>


									<td>Admission No :</td>
									<td><?php echo "<b>".$adno."</b>"; ?></td>

								</tr>								
								<tr>

									<td>Name :</td>
									<td class="cell100 column2"><?php echo "<b>".$name."</b>"; ?></td>

								</tr>								
								<tr>

									<td>Name of parent or Guardian and the relationship of the Guardian : :</td>
									<td class="cell100 column2"><?php echo "<b>".$parent_name."</b>"; ?></td>

								</tr>
								<tr>

									<td>Occupation of parent or Guardian and his residence : :</td>
									<td class="cell100 column2"><?php echo "<b>".$parent_occup."</b>"; ?></td>

								</tr>
								<tr>

									<td>School previuosly attended the Periods spent in each Std :</td>
									<td class="cell100 column2"><?php echo "<b>".$school."</b>"; ?></td>

								</tr>
								<tr>

									<td>Date of Admission :</td>
									<td class="cell100 column2"><?php echo "<b>".$doa."</b>"; ?></td>

								</tr>
								<tr>

									<td>Date of Birth :</td>
									<td class="cell100 column2"><?php echo "<b>".$dob."</b>"; ?></td>

								</tr>
								<tr>

									<td>Religion :</td>
									<td class="cell100 column2"><?php echo "<b>".$religion."</b>"; ?></td>

								</tr>
								<tr>

									<td>Does the pupil belongs to SC/ST , OBC or he/she convert from SC/ST :</td>
									<td class="cell100 column2"><?php echo "<b>".$scst."</b>"; ?></td>

								</tr>
								<tr>

									<td>Standard on Admission :</td>
									<td class="cell100 column2"><?php echo "<b>".$soa."</b>"; ?></td>

								</tr>
								<tr>

									<td>Standard on Leaving :</td>
									<td class="cell100 column2"><?php echo "<b>".$sol."</b>"; ?></td>

								</tr>
								<tr>

									<td>Date of Leaving :</td>
									<td class="cell100 column2"><?php echo "<b>".$dol."</b>"; ?></td>

								</tr>
								<tr>

									<td>No. & Date of Transfer Certificate produced on admission :</td>
									<td class="cell100 column2"><?php echo "<b>".$tca."</b>"; ?></td>

								</tr>
								<tr>

									<td>No & Date of certificate of transfer granted on Leaving :</td>
									<td class="cell100 column2"><?php echo "<b>".$tcl."</b>"; ?></td>

								</tr>
								<tr>

									<td>Reason for Leaving :</td>
									<td class="cell100 column2"><?php echo "<b>".$reason."</b>"; ?></td>

								</tr>
								<tr>

									<td>Date of Vaccination :</td>
									<td class="cell100 column2"><?php echo "<b>".$dov."</b>"; ?></td>

								</tr>
								<tr>

									<td>Remarks :</td>
									<td class="cell100 column2"><?php echo "<b>".$remarks."</b>"; ?></td>

								</tr>


							</tbody>
						</table>
					</div>
				</div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	</body>
</html>