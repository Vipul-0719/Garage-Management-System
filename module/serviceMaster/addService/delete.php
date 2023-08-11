<?php

include '../../connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `service` WHERE id=$id";
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
}

?>