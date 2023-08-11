<?php
  

include '../../connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `vehicleinfo` WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if($res)
    {
        //echo "Info Deleted Successfully";
        //header('location:list.php');
        echo '<script>';
        echo 'alert("Vehicle Data Deleted Succefully!");';
        echo 'window.location.href = "http://localhost/GarageMgtSystem/module/VehicleMaster/Vehicle/list.php"';
        echo '</script>';
    }
    else
    {
        die(mysqli_error($conn));

    }
}


?>