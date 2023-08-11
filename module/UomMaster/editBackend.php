<?php
include '../connect.php';
$id=$_GET['id'];
$uomname=$_GET['uomname'];
$description=$_GET['description'];

$sql ="UPDATE `uominfo` SET `uomname`='$uomname',`description`='$description' WHERE `id`='$id';";
$res = mysqli_query($conn, $sql);

if($res)
    {
        // echo "Info Updated Successfully";
       // header('location:list.php');
       echo '<script>';
       echo 'alert("Uom Data Updated Succefully!");';
       echo 'window.location.href = "http://localhost/GarageMgtSystem/module/UomMaster/list.php"';
       echo '</script>';
    }
    else
    {
        die(mysqli_error($conn));

    }
?>