 
<?php
include '../../connect.php';
$id=$_GET['id'];
$service=$_GET['service'];
$image=$_GET['image'];
$cost=$_GET['cost'];
$gst=$_GET['gst'];
$charges=$_GET['charges'];
$saccode=$_GET['saccode'];
$alert = $_GET['alert'];
$date=$_GET['date'];


$sql ="UPDATE `service` SET `service`='$service',`image`='$image',`cost`='$cost',`gst`='$gst' ,`charges`='$charges',`saccode`='$saccode',
`alert`='$alert', `date`='$date' WHERE `id`='$id';";
$res = mysqli_query($conn, $sql);

if($res)
    {
        // echo "Info Deleted Successfully";
        header('location:list.php');

    }
    else
    {
        die(mysqli_error($conn));

    }
?>
 