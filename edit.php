<!DOCTYPE html>

<?php session_start(); ?>
<?php ob_start(); ?>

<?php 

include "config/db.php";
$error2 =array("");


function update_data($con)
{

    	$_SESSION['edited'] =  array("adno"=>$_POST['adno_n'],"name"=>$_POST['name_n'],"parent_name"=>$_POST['parent_name_n'],"parent_occup"=>$_POST['parent_occup_n'],"school"=>$_POST['school_n'],"doa"=>$_POST['doa_n'],"dob"=>$_POST['dob_n'],"religion"=>$_POST['religion_n'],"scst"=>$_POST['scst_n'],"soa"=>$_POST['soa_n'],"sol"=>$_POST['sol_n'],"dol"=>$_POST['dol_n'],"tca"=>$_POST['tca_n'],"tcl"=>$_POST['tcl_n'],"reason"=>$_POST['reason_n'],"dov"=>$_POST['dov_n'],"remarks"=>$_POST['remarks_n']);
/*
    	$query = "UPDATE `TABLE 2` SET `name`='".$_SESSION['edited']['name']."',`parent_name`='".$_SESSION['edited']['parent_name']."',`parent_occup`='".$_SESSION['edited']['parent_occup']."',`school`='".$_SESSION['edited']['school']."',`doa`='".$_SESSION['edited']['doa']."',`dob`='".$_SESSION['edited']['dob']."',`religion`='".$_SESSION['edited']['religion']."',`scst`='".$_SESSION['edited']['scst']."',`soa`='".$_SESSION['edited']['soa']."',`sol`='".$_SESSION['edited']['sol']."',`dol`='".$_SESSION['edited']['dol']."',`tca`='".$_SESSION['edited']['tca']."',`tcl`='".$_SESSION['edited']['tcl']."',`reason`=".$_SESSION['edited']['reason']."',`dov`='".$_SESSION['edited']['dov']."',`remarks`='".$_SESSION['edited']['remarks']."' WHERE `Adno`=".$_SESSION['edited']['adno'];*/

    	$query = "UPDATE `TABLE 2` SET name='".$_SESSION['edited']['name']."',parent_name='".$_SESSION['edited']['parent_name']."',parent_occup='".$_SESSION['edited']['parent_occup']."',school='".$_SESSION['edited']['school']."',doa='".$_SESSION['edited']['doa']."',dob='".$_SESSION['edited']['dob']."',religion='".$_SESSION['edited']['religion']."',scst='".$_SESSION['edited']['scst']."',soa='".$_SESSION['edited']['soa']."',sol='".$_SESSION['edited']['sol']."',dol='".$_SESSION['edited']['dol']."',tca='".$_SESSION['edited']['tca']."',tcl='".$_SESSION['edited']['tcl']."',reason='".$_SESSION['edited']['reason']."',dov='".$_SESSION['edited']['dov']."',remarks='".$_SESSION['edited']['remarks']."' WHERE adno=".$_SESSION['edited']['adno'];
		$result=mysqli_query($con,$query);


				if(mysqli_affected_rows($con))
				{
					$_SESSION['error']="Data Updated Successfully";
				}
				$_SESSION['data']=$_SESSION['edited'];
				header("Location: result.php");

}
function new_data($con)
{
	     	$_SESSION['edited'] =  array("adno"=>$_POST['adno_n'],"name"=>$_POST['name_n'],"parent_name"=>$_POST['parent_name_n'],"parent_occup"=>$_POST['parent_occup_n'],"school"=>$_POST['school_n'],"doa"=>$_POST['doa_n'],"dob"=>$_POST['dob_n'],"religion"=>$_POST['religion_n'],"scst"=>$_POST['scst_n'],"soa"=>$_POST['soa_n'],"sol"=>$_POST['sol_n'],"dol"=>$_POST['dol_n'],"tca"=>$_POST['tca_n'],"tcl"=>$_POST['tcl_n'],"reason"=>$_POST['reason_n'],"dov"=>$_POST['dov_n'],"remarks"=>$_POST['remarks_n']);


$query="INSERT INTO `TABLE 2`(`Adno`, `name`, `parent_name`, `parent_occup`, `school`, `doa`, `dob`, `religion`, `scst`, `soa`, `sol`, `dol`, `tca`, `tcl`, `reason`, `dov`, `remarks`) VALUES ('".$_SESSION['edited']['adno']."','".$_SESSION['edited']['name']."','".$_SESSION['edited']['parent_name']."','".$_SESSION['edited']['parent_occup']."','".$_SESSION['edited']['school']."','".$_SESSION['edited']['doa']."','".$_SESSION['edited']['dob']."','".$_SESSION['edited']['religion']."','".$_SESSION['edited']['scst']."','".$_SESSION['edited']['soa']."','".$_SESSION['edited']['sol']."','".$_SESSION['edited']['dol']."','".$_SESSION['edited']['tca']."','".$_SESSION['edited']['tcl']."','".$_SESSION['edited']['reason']."','".$_SESSION['edited']['dov']."','".$_SESSION['edited']['remarks']."')";
$query2="DELETE FROM `TABLE 2` WHERE `adno`=".$_SESSION['data']['adno'];

		$result=mysqli_query($con,$query);
		$result2=mysqli_query($con,$query2);


				if(mysqli_affected_rows($con))
				{
					$_SESSION['error']="Data Updated Successfully";
				}
				$_SESSION['data']=$_SESSION['edited'];
				header("Location: result.php");



}

if(!isset($_SESSION['username']))
{
	header("Location: index.php");
}

if(isset($_POST['back']))
{
	header("Location: result.php");
}

if(isset($_POST['confirm']))
{
		$_SESSION['edited']['adno'] = $_POST['adno_n'];
		if($_SESSION['data']['adno'] == $_SESSION['edited']['adno'])
		{
			update_data($con);
		}
		elseif($_SESSION['adno'] != $_SESSION['edited']['adno'])
		{
			$query = "SELECT `Adno`, `name`, `parent_name`, `parent_occup`, `school`, `doa`, `dob`, `religion`, `scst`, `soa`, `sol`, `dol`, `tca`, `tcl`, `reason`, `dov`, `remarks` FROM `TABLE 2` WHERE `Adno` =".$_SESSION['edited']['adno'];
			$result = $con->query($query);
			if ($result->num_rows >0)
			{
				while($row = $result->fetch_assoc()) 
				{
				$error2 =array("Admission number already exists");
				mysqli_close($con);
				}
			}
			else
			{
				new_data($con);
			}
			
		}




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

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom box-shadow" style="background-color:#c4d3f6;margin-bottom: 0px;">
      <a href="result.php"><h5 class="my-0 mr-md-auto font-weight-normal">Back</h5></a>
      <nav class="my-2 my-md-0 mr-md-3" style="background:#c4d3f6;">

        <a class="p-2 text-dark" href="#">&nbsp;</a>
        <a class="p-2 text-dark" href="#">&nbsp;</a>
      </nav>
      <a class="btn btn-outline-primary " href="logout.php">Logout</a>
    </div>
	<form action="" method="post">
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
							<a href="result.php"><button class="btn btn-primary back" type="button" name="back">Back</button></a>
					
							</div>
							<div class="cell" >
										<button class="btn btn-primary confirm" name="confirm">Save</button>

							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Admission No :<?php if (isset($error2)): ?>
    <div class="form-errors">
        <?php foreach($error2 as $error): ?>
            <span class='txt1' style='color:red;'>&nbsp;<?php echo $error ?></span>
        <?php endforeach;$error2 = array(""); ?>
    </div>
<?php endif; ?>
							</div>
							<div class="cell" data-title="Age">
								
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								<input type="text" value="<?php echo $_SESSION['data']['adno']; ?>" name="adno_n">
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
								<input type="text" class="wrap-input100" value="<?php echo $_SESSION['data']['name']; ?>" name="name_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['parent_name']; ?>" name="parent_name_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['parent_occup']; ?>" name="parent_occup_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['school']; ?>" name="school_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['doa']; ?>" name="doa_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['dob']; ?>" name="dob_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['religion']; ?>" name="religion_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['scst']; ?>" name="scst_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['soa']; ?>" name="soa_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['sol']; ?>" name="sol_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['dol']; ?>" name="dol_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['tca']; ?>" name="tca_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['tcl']; ?>" name="tcl_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['reason']; ?>" name="reason_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['dov']; ?>" name="dov_n">
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
								<input type="text" value="<?php echo $_SESSION['data']['remarks']; ?>" name="remarks_n">
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