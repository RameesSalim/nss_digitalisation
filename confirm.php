
<?php session_start(); ?>

<?php ob_start(); ?>

<?php 

$con = mysqli_connect("localhost","root","admin","NSS");
$_SESSION['flag_n']=0;



if(isset($_POST['confirm']))
{


	$adno_n=$_SESSION['adno_n'] = $_POST['adno_n'];
	$query = "SELECT `Adno`, `name`, `parent_name`, `parent_occup`, `school`, `doa`, `dob`, `religion`, `scst`, `soa`, `sol`, `dol`, `tca`, `tcl`, `reason`, `dov`, `remarks` FROM `TABLE 1` WHERE `Adno` = $adno_n";
	$result = $con->query($query);


	if($_SESSION['adno'] == $_SESSION['adno_n'])
	{
		header("Location: edit.php");



	}
	elseif ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	header("Location: edit.php");



}
 }
 else
 {
 	$query = "UPDATE `TABLE 1` SET `name`=$_POST['name_n'],`parent_name`=$_POST['parent_name_n'],`parent_occup`=$_POST['parent_occup_n'],`school`=$_POST['school_n'],`doa`=$_POST['dpa_n'],`dob`=$_POST['dob_n'],`religion`=$_POST['religion_n'],`scst`=$_POST['scst_n'],`soa`=$_POST['soa_n'],`sol`=$_POST['sol_n'],`dol`=$_POST['dol_n'],`tca`=$_POST['tca_n'],`tcl`=$_POST['tcl_n'],`reason`=$_POST['reason_n'],`dov`=$_POST['dov_n'],`remarks`=$_POST['remarks_n'] WHERE `Adno`=$_POST['adno_n']";
 	
 }

}




?>
