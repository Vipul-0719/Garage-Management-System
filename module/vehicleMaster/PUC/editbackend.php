<?php
include '../../connect.php';
             $id=  $_GET['id'];
             $vname= 	$_GET['vname'];
             $lnumber= 	$_GET['lnumber'];
             $pucnumber= 	$_GET['pucnumber'];
             $cname= 	$_GET['cname'];
             $caddress= 	$_GET['caddress'];
             $tdate= 	$_GET['tdate'];
             $valid= 	$_GET['valid'];
             $res= 	$_GET['res'];
             $freason= 	$_GET['freason'];
			
  

$sql ="UPDATE `pucinfo` SET `vname`='$vname', `lnumber`='$lnumber',`pucnumber`='$pucnumber',`cname`='$cname',`caddress`='$caddress',`tdate`='$tdate',`valid`='$valid',`res`='$res',`freason`='$freason' WHERE `id`='$id';";
$res = mysqli_query($conn, $sql);

if($res)
    {
        // echo "Info Updated Successfully";
        //header('location:list.php');
        echo '<script>';
        echo 'alert("PUC Data Updated Succefully!");';
        echo 'window.location.href = "http://localhost/GarageMgtSystem/module/VehicleMaster/PUC/list.php"';
        echo '</script>';

    }
    else
    {
        die(mysqli_error($conn));

    }
?>