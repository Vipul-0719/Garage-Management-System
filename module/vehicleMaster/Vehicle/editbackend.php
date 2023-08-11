<?php
include '../../connect.php';
             $id=  $_GET['id'];

            $vname= 	$_GET['vname'];
            $FName= 	$_GET['FName'];
			$vnumber= 	$_GET['vnumber'];
			$cnumber= 	$_GET['cnumber'];
			$rdate= 	$_GET['rdate'];
			$vtype= 	$_GET['vtype'];
			$vcolor= 	$_GET['vcolor'];
			$ftype= 	$_GET['ftype'];
			$mname= 	$_GET['mname'];
            $myear= 	$_GET['myear'];
            $enumber= 	$_GET['enumber'];
			$ngear= 	$_GET['ngear'];
			$oreading= 	$_GET['oreading'];
			
			
  

$sql ="UPDATE `vehicleinfo` SET `vname`='$vname',`FName`='$FName',`vnumber`='$vnumber',`cnumber`='$cnumber',`rdate`='$rdate',`vtype`='$vtype',`vcolor`='$vcolor',`ftype`='$ftype',`mname`='$mname',`myear`='$myear', `enumber`='$enumber',`ngear`='$ngear',`oreading`='$oreading' WHERE `id`='$id';";
$res = mysqli_query($conn, $sql);

if($res)
    {
        // echo "Info Updated Successfully";
        //header('location:list.php');
        echo '<script>';
        echo 'alert("Vehicle Data Updated Succefully!");';
        echo 'window.location.href = "http://localhost/GarageMgtSystem/module/VehicleMaster/Vehicle/list.php"';
        echo '</script>';
    }
    else
    {
        die(mysqli_error($conn));

    }
?>