<?php

include '../../connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `serreminder` WHERE id=$id";
    $resl = mysqli_query($conn, $sql);
    if($resl)
    {
        // echo "Info Deleted Successfully";
        header('location:list.php');

    }
    else
    {
        die(mysqli_error($conn));

    }
}

?>