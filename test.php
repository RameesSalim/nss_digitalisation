<?php
$a="Haii <br>";
$b="printrgt<br>";
$c="printdhdh<br>";
$d="printdhh<br>";
$e="printdfh<br>";
$f="printhtdfe<br>";
$g="printdhgt<br>";
$h=array("hai1"=>$a,"hai2"=>$b,"hai3"=>$c,"hai4"=>$d,"hai5"=>$e,"hai6"=>$f)
;
session_start();
$_SESSION['a']=array("hai1"=>$a,"hai2"=>$b,"hai3"=>$c,"hai4"=>$d,"hai5"=>$e,"hai6"=>$f);
$_SESSION['b']=array("hai5"=>$a,"hai6"=>$b,"hai7"=>$c,"hai8"=>$d,"hai9"=>$e,"hai0"=>$f);
/*echo $_SESSION['a']['hai1'];
echo $h["hai1"];
$_SESSION['a']['hai2']="byee";
echo $_SESSION['a']['hai2'];*/

echo $_SESSION['a']['hai1'];
echo $_SESSION['b']['hai6'];
$_SESSION['a']=$_SESSION['b'];
echo $_SESSION['a']['hai6'];

/*
		 $_SESSION['adno_n']= $_POST['adno_n'];
    	$_SESSION['name_n']=$_POST['name_n'];
    	$_SESSION['parent_name_n']= $_POST['parent_name_n'];
    	$_SESSION['parent_occup_n']=  $_POST['parent_occup_n'] ;
    	$_SESSION['school_n']=  $_POST['school_n'];
    	$_SESSION['doa_n']= $_POST['doa_n']; 
    	$_SESSION['dob_n'] = $_POST['dob_n'];
    	$_SESSION['religion_n']= $_POST['religion_n'];
    	$_SESSION['scst_n']= $_POST['scst_n'];
    	$_SESSION['soa_n']= $_POST['soa_n'];
    	$_SESSION['sol_n']= $_POST['sol_n'];
    	$_SESSION['dol_n']= $_POST['dol_n'];
    	$_SESSION['tca_n']= $_POST['tca_n'];
    	$_SESSION['tcl_n']= $_POST['tcl_n'];
    	$_SESSION['reason_n']= $_POST['reason_n'];
    	$_SESSION['dov_n']= $_POST['dov_n'];
    	$_SESSION['remarks_n']= $_POST['remarks_n'];

    					$query = "UPDATE `TABLE 2` SET `name`=".$_SESSION['name_n'].",`parent_name`=".$_SESSION['parent_name_n'].",`parent_occup`=".$_SESSION['parent_occup_n'].",`school`=".$_SESSION['school_n'].",`doa`=".$_SESSION['doa_n'].",`dob`=".$_SESSION['dob_n'].",`religion`=".$_SESSION['religion_n'].",`scst`=".$_SESSION['scst_n'].",`soa`=".$_SESSION['soa_n'].",`sol`=".$_SESSION['sol_n'].",`dol`=".$_SESSION['dol_n'].",`tca`=".$_SESSION['tca_n'].",`tcl`=".$_SESSION['tcl_n'].",`reason`=".$_SESSION['reason_n'].",`dov`=".$_SESSION['dov_n'].",`remarks`=".$_SESSION['remarks_n']." WHERE `Adno`=".$_SESSION['adno_n'];*/


$query="INSERT INTO `TABLE 2`(`Adno`, `name`, `parent_name`, `parent_occup`, `school`, `doa`, `dob`, `religion`, `scst`, `soa`, `sol`, `dol`, `tca`, `tcl`, `reason`, `dov`, `remarks`) VALUES ('".$_SESSION['edited']['adno']."','".$_SESSION['edited']['name']."','".$_SESSION['edited']['parent_name']."','".$_SESSION['edited']['parent_occup']."','".$_SESSION['edited']['school']."','".$_SESSION['edited']['doa']."','".$_SESSION['edited']['dob']."','".$_SESSION['edited']['religion']."','".$_SESSION['edited']['scst']."','".$_SESSION['edited']['soa']."','".$_SESSION['edited']['sol']."','".$_SESSION['edited']['dol']."','".$_SESSION['edited']['tca']."','".$_SESSION['edited']['tcl']."','".$_SESSION['edited']['reason']."','".$_SESSION['edited']['dov']."','".$_SESSION['edited']['remarks']."')";


    	$query = "UPDATE `TABLE 2` SET `name`='".$_SESSION['edited']['name']."',`parent_name`='".$_SESSION['edited']['parent_name']."',`parent_occup`='".$_SESSION['edited']['parent_occup']."',`school`='".$_SESSION['edited']['school']."',`doa`='".$_SESSION['edited']['doa']."',`dob`='".$_SESSION['edited']['dob']."',`religion`='".$_SESSION['edited']['religion']."',`scst`='".$_SESSION['edited']['scst']."',`soa`='".$_SESSION['edited']['soa']."',`sol`='".$_SESSION['edited']['sol']."',`dol`='".$_SESSION['edited']['dol']."',`tca`='".$_SESSION['edited']['tca']."',`tcl`='".$_SESSION['edited']['tcl']."',`reason`=".$_SESSION['edited']['reason']."',`dov`='".$_SESSION['edited']['dov']."',`remarks`='".$_SESSION['edited']['remarks']."' WHERE `Adno`=".$_SESSION['edited']['adno'];
		$result=mysqli_query($con,$query);




		/*    	$_SESSION['adno']=$adno = $row["Adno"];
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
    	$_SESSION['remarks']=$remarks = strtoupper($row["remarks"]); */