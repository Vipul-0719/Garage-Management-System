<?php
include '../../connect.php';
             $id=  $_GET['id'];
			$cname= 	$_GET['cname'];
			$pnumber= 	$_GET['pnumber'];
            $vname= 	$_GET['vname'];
			$FName= 	$_GET['FName'];
			$cpayable= 	$_GET['cpayable'];
			$vnumber= 	$_GET['vnumber'];
			$pdocument= $_GET['pdocument'];
            $sdate= 	$_GET['sdate'];
			$edate= 	$_GET['edate'];
			

$sql ="UPDATE `insuranceinfo` SET `cname`='$cname',`pnumber`='$pnumber',`vname`='$vname',`FName`='$FName',`cpayable`='$cpayable',`vnumber`='$vnumber',`sdate`='$sdate',`edate`='$edate',`pdocument`='$pdocument' WHERE `id`='$id';";
$res = mysqli_query($conn, $sql);

if($res)
    {
        // echo "Info Updated Successfully";
       // header('location:list.php');
       echo '<script>';
        echo 'alert("Insurance Data Updated Succefully!");';
        echo 'window.location.href = "http://localhost/GarageMgtSystem/module/VehicleMaster/Insurance/list.php"';
        echo '</script>';

    }
    else
    {
        die(mysqli_error($conn));

    }
?>