<?php
include '../../connect.php';
$id=$_GET['id'];
$customernm=$_GET['customernm'];
$vehiclenm=$_GET['vehiclenm'];
$service=$_GET['service'];
$date=$_GET['date'];



$sql ="UPDATE `serreminder` SET `customernm`='$customernm',`vehiclenm`='$vehiclenm',`service`='$service',`date`='$date' WHERE `id`='$id';";
$res = mysqli_query($conn, $sql);

if($res)
    {
        // echo "Info Updated Successfully";
        header('location:list.php');

    }
    else
    {
        die(mysqli_error($conn));

    }
?>