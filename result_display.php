
<!DOCTYPE html>

<?php session_start(); ?>
<?php ob_start(); ?>

<?php 

$con = mysqli_connect("localhost","root","admin","NSS");

if(!isset($_SESSION['username']))
{
	header("Location: index.php");

}
$i=$_SESSION['i'];

    

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
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom box-shadow" style="background-color:#c4d3f6;margin-bottom: 0px;">
      <a href="2.php"><h5 class="my-0 mr-md-auto font-weight-normal">Back</h5></a>
      <nav class="my-2 my-md-0 mr-md-3" style="background:#c4d3f6;">

        <a class="p-2 text-dark" href="#">&nbsp;</a>
        <a class="p-2 text-dark" href="#">&nbsp;</a>
      </nav>
      <a class="btn btn-outline-primary " href="logout.php">Logout</a>
    </div>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								<b>YEAR :<?php echo "".$_SESSION['year']."</b>"; ?>
							</div>
							<div class="cell">
								<b>DATAS :<?php echo "".$_SESSION['i']."</b>"; ?>
							</div>
							<div class="cell">
								&nbsp;
							</div>
							<div class="cell">
								<a href="1.php"><button class="btn btn-primary">Get Data</button></a>
							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								<b>Admission No </b>
							</div>
							<div class="cell" data-title="Age">
								<b>Name </b>
							</div>
							<div class="cell" data-title="Job Title">
								<b>Parent Name</b>
							</div>
							<div class="cell" data-title="Location">
								<b>Date of Birth</b>
							</div>
						</div>


<?php $n=0;while($n <= $_SESSION['i'])
{


echo "

												<div class='row'>
							<div class='cell' data-title='Full Name'>
								<b>".$_SESSION['adno'][$n]."</b>
							</div>
							<div class='cell' data-title='Age'>
								".$_SESSION['name'][$n]."
							</div>
							<div class='cell' data-title='Job Title'>
								".$_SESSION['parent_name'][$n]."
							</div>
							<div class='cell' data-title='Location'>
								".$_SESSION['dob'][$n]."
							</div>
						</div>";

$n++;
}

?>

						
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