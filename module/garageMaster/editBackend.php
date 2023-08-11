<?php
include '../connect.php';
error_reporting(0);
            $id=$_GET['id'];
            $logoimg= 	$_GET['logoimg'];
            $gname= 	$_GET['gname'];
			$oname= $_GET['oname'];
			$contact= 	$_GET['contact'];
			$email= 	$_GET['email'];
			$website= 	$_GET['website'];
			$badd= $_GET['badd'];
            $bcity= 	$_GET['bcity'];
            $bpincode= 	$_GET['bpincode'];
            $bstate= 	$_GET['bstate'];
            $bcountry= 	$_GET['bcountry'];
            $semail= 	$_GET['semail'];
			$sadd= $_GET['sadd'];
            $scity= 	$_GET['scity'];
            $spincode= 	$_GET['spincode'];
            $sstate= 	$_GET['sstate'];
            $scountry= 	$_GET['scountry'];
            $pemail= 	$_GET['pemail'];
            $gstimage= 	$_GET['gstimage'];
            $regimage= 	$_GET['regimage'];
            $panimage= 	$_GET['panimage'];
    $selectquery ="UPDATE `garageinfo` SET `logoimg`='$logoimg',`gname`='$gname',`oname`='$oname',`contact`='$contact',`email`='$email',`website`='$website',`badd`='$badd',
        `bcity`='$bcity', `bpincode`='$bpincode', `bstate`='$bstate', `bcountry`='$bcountry', `semail`='$semail' ,`sadd`='$sadd', `scity`='$scity', `spincode`='$spincode' ,
        `sstate`='$sstate',`scountry`='$scountry',`pemail`='$pemail',`gstimage`='$gstimage',`regimage`='$regimage',`panimage`='$panimage'  WHERE `id`='$id'";
     $result = mysqli_query($conn, $selectquery);
if($result)
    {
        // echo "Info Updated Successfully";
        //header('location:list.php');
        echo '<script>';
        echo 'alert("Garage Data Updated Succefully!");';
        echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/garageMaster/list.php"';
        echo '</script>';

    }
    else
    {
        die(mysqli_error($conn));
    }
?>