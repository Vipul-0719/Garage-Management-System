<?php

include '../connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `uominfo` WHERE id=$id";
    $resl = mysqli_query($conn, $sql);
    if($resl)
    {
        // echo "Info Deleted Successfully";
       // header('location:list.php');
       echo '<script>';
       echo 'alert("Uom Data Deleted Succefully!");';
       echo 'window.location.href = "http://localhost/GarageMgtSystem/module/UomMaster/list.php"';
       echo '</script>';
    }
    else
    {
        die(mysqli_error($conn));

    }
}

?>